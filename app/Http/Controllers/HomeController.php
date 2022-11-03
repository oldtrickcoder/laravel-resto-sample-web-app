<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\daftar_meja;
use App\Models\daftar_menu;
use App\Models\user_activity;
use App\Models\daftar_pesanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nama=Auth::user()->name;
        $id_karyawan=Auth::user()->id;
        //return Auth::user();
        user_activity::create([
            "user_id"=>$id_karyawan,
            "aktifitas"=>"login sistem"
        ]);
        
        $daftar_mejas=daftar_meja::where('status','=','kosong')->count();
        $menu_tersedia=daftar_menu::where('status','=','ready')->count();
        $pesanan_blmdilayani=daftar_pesanan::where('status','=','belum dibayar')->count();
     
        return view('home',['avlbltable'=>$daftar_mejas,'avlblmenu'=>$menu_tersedia,'pesanan_blmdbyr'=>$pesanan_blmdilayani]) ;
        
    }

}
