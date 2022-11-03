@extends('layouts.daftarpesanan-template')

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
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
           
        
        
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row ">
        <div class="card bg-light col px-2 py-2">
          <h1>Daftar Pesanan </h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">NomorPesanan</th>
                <th scope="col">jumlahitem</th>
                <th scope="col">TotalNominal</th>
                <th scope="col">nomormeja</th>
                <th scope="col">NamaPelayan</th>
                <th scope="col">status</th>
                <th scope="col">waktu</th>
              </tr>
            </thead>
            <tbody>
            @if($allpesanan)
            @foreach($allpesanan as $obj)
            <tr>
              <td scope="col">{{$obj->nomorpesanan}}</td>
              <td scope="col">{{$obj->jumlahItemMenu}}</td>
              <td scope="col">{{$obj->TotalNominalPembelanjaan}}</td>
              <td scope="col">{{$obj->nomor_meja}}</td>
            
              <td scope="col">{{$obj->namapelayan}}</td>
            
              <td scope="col">
              {{$obj->status}}
                </td>
          
              <th scope="col d-flex">
           {{$obj->created_at}}
              </th>
            </tr>
            @endforeach
            @endif
            </tbody>
          </table>
        </div>
    </div>
  </div>

@endsection



