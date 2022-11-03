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
        <div class="col-auto ms-auto d-print-none">
    <div class="btn-list">
       
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
        <div class="row ">
            <form action="{{ url('/catat-pesanan/catatorderbaru') }}"  method="POST">
              @csrf
                
        <div class="card bg-light col px-2 py-2">
            <div class="mb-3 col-4">
                <input type="text" name="namapelayan" value='{{  Auth::user()->name }}' class="d-none">
                <label for="nomormeja" class="form-label">nomor meja</label>
                <select class="form-select" aria-label="Default select example" name="nomormeja">
                    @foreach($daftarMeja as $datas)
                    <option value='{{$datas -> nomor_meja }}'>{{$datas -> nomor_meja }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="mb-3 col-4">
              </div>
              <button class="btn btn-primary col-4" type="submit">submit</button>
            </form>
                
               



        </div>
    </div>
</div> 

  </div>
  
 
@endsection

