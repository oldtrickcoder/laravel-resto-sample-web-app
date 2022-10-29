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
      <div class="card bg-light col px-2 py-2">
        <div class="d-flex">
          <h2>Nomor Pesanan :</h2><h2>  </h2>
        </div>
        <div class="d-flex">
          <h2>Nomor meja :</h2><h2>  </h2>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Menu</th>
              <th scope="col">Harga</th>
              <th scope="col">qty</th>
              <th scope="col">Total Nominal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <div class="btn-list d-flex justify-content-end">
          <a class="btn btn-primary" href="{{ route('catat-pesanan.create') }}">(+) Tambah Item</a>
          <div class="btn btn-success">Submit Pesanan</div>
        </div>

      </div>
       
     
    </div>
  </div>
  <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-small">
    Small modal
  </a>
  <div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-title">Are you sure?</div>
          <div>If you proceed, you will lose all your personal data.</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, delete all my data</button>
        </div>
      </div>
    </div>
  </div>
@endsection

