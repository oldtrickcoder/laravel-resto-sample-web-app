@extends('layouts.catatpesanan-template')

@section('content')

<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Dashboard
          </div>
          <h2 class="page-title">
           Pelayanan Laravel Resto
          </h2>
        </div>
        <!-- Page title actions -->
        @if(count($OrderTrans)<1)
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
          <a href="{{ url('/catat-pesanan/order') }}" class="btn btn-primary">(+) Catat Transaksi baru</a>
    </div>
    @endif
  </div>
  <div class="page-body">
  @if($pesan)
  <div class="alert alert-primary" role="alert">
    {{$pesan}}
  </div>
  @endif 
  @if(session('hapuspesan'))
  <div class="alert alert-danger" role="alert">
    {{session('hapuspesan')}}
  </div>
  @endif
    <div class="container-xl">
      <div class="row ">
      <div class="card bg-light col px-2 py-2">
        @if($OrderTrans)
        <div class="d-flex">
          @foreach($OrderTrans as $dataOrder)
          <h2>Nomor Pesanan :</h2>
          <h2>{{$dataOrder -> nomorpesanan}} </h2>
        </div>

        <div class="d-flex">
          <h2>Nomor meja :</h2><h2>
            {{$dataOrder -> nomor_meja}}   
          </h2>
        </div>
        @endforeach
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Menu</th>
              <th scope="col">Harga</th>
              <th scope="col">qty</th>
              <th scope="col">Total Nominal</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
         @if($DetailOrder)
            @foreach($DetailOrder as $order)
            {{-- {{$order}} --}}
            <tr >
              <th scope="row">{{$order -> nama_menu }} </th>
              <td>{{$order -> harga }}</td>
              <td> {{$order -> qty }}</td>
              <td>{{$order -> qty * $order -> harga }} </td>
              <td>
                <div class="btn-list">
             
                 
                  <a class="btn btn-success"
                  href="{{ route('catat-pesanan.edit',$order->id) }}"
                  >Edit</a>
                  
              
                  <form 
                  onsubmit="return confirm('Apakah Anda yakin menghapus ?');"
                  action="{{ route('catat-pesanan.destroy', $order->id) }}"
                  method="POST"
                  id="hapusorder"
                  >
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" 
                  type="submit"
                   onclick="document.getElementById('hapusorder').click();"
                   >Hapus</button>
           
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
         @endif
          </tbody>
        </table>
        @if(count($OrderTrans)>0)
        <div class="d-flex flex-column justify-content-end align-items-end">
          <h1>Total Nominal Pembelanjaan </h1>
        
          <h2>
            
            {{$OrderTrans[0] -> TotalNominalPembelanjaan}}
          
          </h2>
        </div> 
        @endif
   
        <div class="btn-list d-flex justify-content-end">
   @if(count($OrderTrans)>0)
          <form action="{{ url('/catat-pesanan/Create-item') }}" method="GET"  >
            <input type="text" name="nomorpesanan" value="{{ $OrderTrans[0] -> nomorpesanan }}" class="d-none" >
          <button type="submit"  class="btn btn-primary" >(+) Tambah Item</button>
        </form>
    
 
 
         <form 
         onsubmit="return confirm('Apakah Anda yakin mensubmit Order ini ?');"
         action="{{ route('catat-pesanan.store')}}" method="POST" class="d-none">
          @csrf
        
          <input type="text" name="id" id="" value="{{ $OrderTrans[0] -> id }}" class="d-none">
          <input type="text" name="nomorpesanan" id="" value="{{ $OrderTrans[0] -> nomorpesanan }}" class="d-none">
          <button id="submitpesanan" type="submit"> </button>
         </form>
          <div class="btn btn-success" 
          onclick="document.getElementById('submitpesanan').click();"
          >Submit Pesanan</div>
        </div>
      </div>

      @endif
     
    </div>

  </div>

 
@endsection

