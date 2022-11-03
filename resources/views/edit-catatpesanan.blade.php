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
   
  </div>
  <div class="page-body">
  @if($pesan)
  <div class="alert alert-primary" role="alert">
    {{$pesan}}
  </div>
    @endif 
    <div class="container-xl">
      <div class="row ">
        <div class="card bg-light col px-2 py-2">
          @if(count($OrderTrans)>0)
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
      
          
        </div>     
    </div>
    <div class="row min-vh-30">
     @if($Detail)
     <div class="card bg-light col px-2 py-2">
     <form action="{{ route('catat-pesanan.update',$Detail[0]->id) }}" method="post" class="px-3 py-3 d-flex flex-column align-items-center justify-content-center min-vh-30">
      @csrf
      @method('PUT')
      {{-- <input type="text" name="_id" id="" class="form-control my-2 w-50 d-none" value="{{$Detail[0]->id}}" disabled> --}}
      <label for="" class="my-2"> Nama Menu</label>
      <input type="text" name="namamenu" id="" class="form-control my-2 w-50" value="{{$Detail[0]->nama_menu}}" disabled>
      <label for="" class="my-2"> harga</label>
      <input type="text" name="harga" id="" class="form-control my-2 w-50" value="{{$Detail[0]->harga}}" disabled>
      <label for="" class="my-2"> Quantity</label>
      <div class="d-flex col-3 py-3">
        <button class="btn btn-small btn-success"
        onclick="
         event.preventDefault();
        if( document.getElementById('qtynumber-{{$Detail[0]->id}}').value=='' || document.getElementById('qtynumber-{{$Detail[0]->id}}').value==0){
                  document.getElementById('qtynumber-{{$Detail[0]->id}}').value=0;
          return;
        }else{
                  document.getElementById('qtynumber-{{$Detail[0]->id}}').value=parseInt(document.getElementById('qtynumber-{{$Detail[0]->id}}').value)-1;
        }    
        "
        >-</button>
        <input type="text" name="qty" id="qtynumber-{{$Detail[0]->id}}" class="form-control  col-4" >
        <button class="btn btn-small btn-success"
        onclick="
        event.preventDefault();
        if( document.getElementById('qtynumber-{{$Detail[0]->id}}').value==''){
                  document.getElementById('qtynumber-{{$Detail[0]->id}}').value=0;
                  document.getElementById('qtynumber-{{$Detail[0]->id}}').value=parseInt(document.getElementById('qtynumber-{{$Detail[0]->id}}').value)+1
        }else{
                  document.getElementById('qtynumber-{{$Detail[0]->id}}').value=parseInt(document.getElementById('qtynumber-{{$Detail[0]->id}}').value)+1;
        }     
        "
        >+</button>
      </div>
      <button type="submit" class="btn btn-success w-30 p-2" style="width:15% !important;height:50px !important;">Update</button>
    </div>
   
  </form>

    @endif
    </div>
  </div>

 
@endsection

