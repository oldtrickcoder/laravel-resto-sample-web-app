<?php

namespace App\Http\Controllers;
use App\Models\daftar_pesanan;
use App\Models\detail_pesanan;
use App\Models\daftar_menu;
use App\Models\user_activity;
use App\Models\daftar_meja;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class pencatatan_pesanan extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $nama=Auth::user()->name;
      
        $pesanan=daftar_pesanan::where('namapelayan','=',$nama)
        ->where('status','=','memilih makanan')
        ->get();
        if(count($pesanan)>0){
        $identifier=$pesanan[0]->id; 
        $DetailOrder=detail_pesanan::select('daftar_menus.nama_menu','daftar_menus.harga','detail_pesanans.qty'
        ,'detail_pesanans.id')->join('daftar_menus','daftar_menus.id','=','detail_pesanans.menu_id')
        ->join('daftar_pesanans','daftar_pesanans.id','=','detail_pesanans.id_pesanan')
        ->where('daftar_pesanans.id','=',$identifier)
        ->get();
   

        return view('catat-pesanan',[
           "OrderTrans"=>$pesanan,
           'pesan'=>null,
            'DetailOrder'=>$DetailOrder,
        ]);
        }else{
            return view('catat-pesanan',[
           "OrderTrans"=>$pesanan,
           'pesan'=>null,
            'DetailOrder'=>null,
            // 'TotalBelanja'=>null
        ]);
        //return "null ";
        }
        
        
    }
    public function order()
    {

        $mejatersedia=daftar_meja::where('status','=','kosong')->get();
        return view('neworder',["daftarMeja"=>$mejatersedia]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }
    public function createItem(Request $request){
        
        if (request('search')) {
            $value=daftar_menu::where('Nama_Menu', 'like', '%' . request('search') . '%')->get();
            $nomorpesanan=daftar_pesanan::where('nomorpesanan','=',$request->nomorOrder)->get();
            return view('tambah-item',[
                'datas'=>$value,
                'no_Order'=>$nomorpesanan[0]->nomorpesanan
            ]);
        }else{
            $nomororder=$request->nomorpesanan;
            $value=daftar_menu::get();
            return view('tambah-item',[
                'datas'=>$value,
                'no_Order'=>$nomororder
            ]);
        }
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomorpesanan=$request->nomorpesanan;
        $daftar_pesanan=daftar_pesanan::findOrFail($request->id)->update([
            "status"=>"on progress"
        ]);
        $id_karyawan=Auth::user()->id;
        user_activity::create([
            "user_id"=>$id_karyawan,
            "aktifitas"=>"Submit Nota"
        ]);
        return redirect('catat-pesanan');
    }

    public function tambahitem(Request $request){
        //return $request;
        $ID=intval($request->id);
        $Qty=intval($request->qty);
        $HargaMenu=intval($request->harga);
        $TotalNominal=$Qty*$HargaMenu;
        $dataNota= DB::table('daftar_pesanans')
        ->where('nomorpesanan','=',$request -> nomorpesanan)
        ->get();
        $nilaiqtyAwal=$dataNota[0]->jumlahItemMenu;
        $nilainominalAwal=$dataNota[0]->TotalNominalPembelanjaan;
        DB::table('daftar_pesanans')->where('nomorpesanan','=',$request -> nomorpesanan)
        ->update([
            'jumlahItemMenu'=>  $nilaiqtyAwal != 0 ? intval($nilaiqtyAwal) +$Qty : $Qty ,
            'qty'=> $nilaiqtyAwal != 0 ? intval($nilaiqtyAwal) +$Qty : $Qty,
            'TotalNominalPembelanjaan'=>$nilainominalAwal!=0 ?intval($nilainominalAwal) + $TotalNominal : $TotalNominal
        ]);
      
        detail_pesanan::create([
            'id_pesanan'=>$dataNota[0]-> id,
            'menu_id'=>$ID,
            'qty'=>$Qty
        ]);

        //$nama=Auth::user()->name;
        $id_karyawan=Auth::user()->id;
        user_activity::create([
            "user_id"=>$id_karyawan,
            "aktifitas"=>"menambah data item"
        ]);
        return redirect('/catat-pesanan');
    }
   
    public function InputNomerOrder(Request $request)
    {
        $angkameja=intval($request->nomormeja);
        $nomerpesanan=intval(daftar_pesanan::count())+1;
        $nama=strval($request->namapelayan);
        DB::table('daftar_mejas')
        ->where('nomor_meja','=',$angkameja)
        ->update(['status'=>'terisi']);
        $dataJumlahPesanan=DB::table('daftar_pesanans')->count() + 1;
        daftar_pesanan::create([
            'qty'=>0,
            'nomor_meja'=>$angkameja,
            'nomorpesanan'=>"ABC".date('dmy')."-".$dataJumlahPesanan,
            'jumlahItemMenu'=>0,
            'TotalNominalPembelanjaan'=>0,
            'namapelayan'=>$nama,
            'status'=>'memilih makanan'
        ]);
        $nama=Auth::user()->name;
        $id_karyawan=Auth::user()->id;
        user_activity::create([
            "user_id"=>$id_karyawan,
            "aktifitas"=>"buat pencatatan pesanan baru"
        ]);
        return redirect('/catat-pesanan');
    }

   
  

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $id;
        $nama=Auth::user()->name;
        $pesanan=daftar_pesanan::where('namapelayan','=',$nama)
        ->where('status','=','memilih makanan')
        ->get();
        $DetailOrder=detail_pesanan::select('daftar_menus.nama_menu','daftar_menus.harga','detail_pesanans.qty'
        ,'detail_pesanans.id')
        ->join('daftar_menus','daftar_menus.id','=','detail_pesanans.menu_id')
        ->where('detail_pesanans.id','=',$id)
        ->get();
        //$nama=Auth::user()->name;
       
        return view('edit-catatpesanan',[
            "OrderTrans"=>$pesanan,
            'pesan'=>null,
             'Detail'=>$DetailOrder
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'qty'=>'required'
        ]);
        $detail = detail_pesanan::findOrFail($id);
        //dd($detailOrder);
        //return $detail;
        $detail->update([
            'qty'=>$request->qty
        ]);
        $DataPesanan=detail_pesanan::select('daftar_menus.nama_menu','daftar_menus.harga','detail_pesanans.qty'
        ,'detail_pesanans.id','daftar_pesanans.nomorpesanan')
        ->join('daftar_menus','daftar_menus.id','=','detail_pesanans.menu_id')
        ->join('daftar_pesanans','daftar_pesanans.id','=','detail_pesanans.id_pesanan')
        ->where('daftar_pesanans.id','=',$detail->id_pesanan)
        ->get();
        //return $DataPesanan[0]->nomorpesanan;
        $arrSample=array();
        foreach($DataPesanan as $pesanan){
             array_push($arrSample, $pesanan->harga * $pesanan -> qty);
         };
        $totalnilaiNotaTerupdate=array_sum($arrSample);
        $hasilPencarianPesanan=daftar_pesanan::findOrFail($detail->id_pesanan);
         $hasilPencarianPesanan->update([
            "TotalNominalPembelanjaan"=>  $totalnilaiNotaTerupdate
         ]);
         $id_karyawan=Auth::user()->id;
         user_activity::create([
             "user_id"=>$id_karyawan,
             "aktifitas"=>"edit pesanan ".$DataPesanan[0]->nomorpesanan
         ]);
         return redirect('/catat-pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $Order=detail_pesanan::findOrFail($id);
        $DataPesanan=detail_pesanan::select('daftar_menus.nama_menu','daftar_menus.harga','detail_pesanans.qty'
        ,'detail_pesanans.id','daftar_pesanans.nomorpesanan')
        ->join('daftar_menus','daftar_menus.id','=','detail_pesanans.menu_id')
        ->join('daftar_pesanans','daftar_pesanans.id','=','detail_pesanans.id_pesanan')
        ->where('detail_pesanans.id','=',$id)
        ->get();
        
         $TotalNominal=daftar_pesanan::where('id','=',$Order->id_pesanan)->get()[0]->TotalNominalPembelanjaan;
         $NominalAfterSubtract=$TotalNominal-($DataPesanan[0]->harga * $DataPesanan[0]->qty);
         $targetRow=daftar_pesanan::findOrFail($Order->id_pesanan);
         $QTYAfterSubs=$targetRow->qty - $DataPesanan[0] -> qty;
        //  return $DataPesanan;
         $targetRow->update([
            "TotalNominalPembelanjaan"=>  $NominalAfterSubtract,
            "qty"=>$QTYAfterSubs,
            "jumlahItemMenu" =>$QTYAfterSubs
         ]);
         $Order->delete();
         if($Order){
            $id_karyawan=Auth::user()->id;
         user_activity::create([
             "user_id"=>$id_karyawan,
             "aktifitas"=>"Hapus Data Item Pesanan ".$DataPesanan[0]->nomorpesanan
         ]);
            return redirect()
            ->route('catat-pesanan.index')
            ->with(['hapuspesan'=>'data order berhasil dihapus']);
         }else{
            return redirect()
            ->route('catat-pesanan.index')
            ->with(['hapuspesan'=>'terjadi kesalahan teknis mohon coba lagi lain kali']);
         }

     
    }

  
}
