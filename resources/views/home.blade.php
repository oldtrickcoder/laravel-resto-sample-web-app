@extends('layouts.app')

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
          <div class="card bg-secondary text-white col-3 px-2 py-2 mx-3 my-3">
            <h1>{{$avlblmenu}}</h1>
            <h3>Jumlah menu tersedia</h3>
          </div>
          <div class="card bg-danger col-3 px-2 py-2  mx-3 my-3">
            <h1>{{$pesanan_blmdbyr}}</h1>
            <h3>Pesanan Belum Dibayar</h3>
          </div>
          <div class="card bg-success col-3 px-2 py-2  mx-3 my-3">
            <h1>{{$avlbltable}}</h1>
            <h3>Jumlah Meja Kosong</h3>
          </div>
         
       
      </div>
    </div>

@endsection

