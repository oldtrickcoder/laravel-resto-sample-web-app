@extends('../layouts.catatpesanan-template')

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
       <h1>Cari Item Disini</h1>
       <form action="." method="get">
        <div class="input-icon d-flex">
          <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
          </span>
          <input type="text" class="form-control mx-2" placeholder="Search…" aria-label="Search in website">
          <button class="btn btn-secondary">Cari Menu</button>
        </div>
      </form>
    </div>
        


    <div class="row mt-3">
      @foreach($datas as $data)
    
      <div class="col-sm-6 col-lg-4">
        <form action="" method="post">
        <div class="card card-sm">
          <a href="#" class="d-block"><img src="{{ asset($data->gambar)}}" class="card-img-top"></a>
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <div>{{$data->Nama_Menu}}</div>
                <h3>{{$data->harga}}</h3>
                @if($data->status =="ready")
                <div class="bg-success text-white">{{$data->status}}</div>
                @else 
                <div class="bg-danger text-white">{{$data->status}}</div>
                @endif
                <div class="d-flex">
                  <button class="btn bg-green text-white mr-1" onclick="event.preventDefault();console.log('plux clicked');
                  document.getElementById('qtynumnber-{{$data->id}}').value=parseInt(document.getElementById('qtynumnber-{{$data->id}}').value)+1" data-demo-color>-</button>
                  <input type="text" class="form-control col" name="qty" id="qtynumnber-{{$data->id}}" value="0">
                  <button class=" btn bg-green text-white ms-1" onclick="event.preventDefault();console.log('plux clicked');
                  document.getElementById('qtynumnber-{{$data->id}}').value=parseInt(document.getElementById('qtynumnber-{{$data->id}}').value)+1;" data-demo-color>+</button>
                </div>
         
                <div class="d-flex justify-content-end w-100">
                  <button type="submit" class="btn btn-secondary mt-2">+ Tambah Item</button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach









      <script>
       
      </script>

    </div>
  </div>

@endsection

