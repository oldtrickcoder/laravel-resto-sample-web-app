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
       <form >
        @if($no_Order)
        <input type="text" name="nomorOrder" value="{{ $no_Order}}" class="d-none">
        @endif
        <div class="input-icon d-flex">
          <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
          </span>
          <input type="text" class="form-control mx-2" placeholder="Search…" aria-label="Search in website"
          name="search"
          >
          <button class="btn btn-secondary">Cari Menu</button>
        </div>
      </form>
    </div>
        


    <div class="row mt-3">
      @foreach($datas as $data)
    
      <div class="col-sm-6 col-lg-4">
        <form action="{{ url('/catat-pesanan/tambahitem') }}" method="GET" name="form-{{$data->id}}">
          @if($no_Order)
          <input type="text" name="nomorpesanan" value="{{ $no_Order}}" class="d-none">
          @endif
      
        <div class="card card-sm my-1">
          <a href="#" class="d-block"><img src="{{ asset($data->gambar)}}" class="card-img-top"></a>
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <div>{{$data->Nama_Menu}}</div>
                <h3>{{$data->harga}}</h3>
                @if($data->status =="ready")
                <div class="bg-success text-white">{{$data->status}}</div>
                @else 
                <div class="bg-warning text-white">{{$data->status}}</div>
                @endif
                <div class="d-flex">
                  @if($data->status =="ready")
                  <button class="btn bg-green text-white mr-1" onclick="event.preventDefault();console.log('min clicked');
                
                if( document.getElementById('qtynumnber-{{$data->id}}').value=='' ||document.getElementById('qtynumnber-{{$data->id}}').value==0 ){
                    document.getElementById('qtynumnber-{{$data->id}}').value=0;
                  }else{
                    document.getElementById('qtynumnber-{{$data->id}}').value=parseInt(document.getElementById('qtynumnber-{{$data->id}}').value)-1;
                  }" data-demo-color>-</button>
                  @endif
                  <input type="text" class="form-control col input-qty d-none" name="Nama_Makanan" value="{{$data->Nama_Menu}}" style="font-size: 1.3rem;">
                  @if($data->status =="ready")
                  <input type="text" class="form-control col input-qty" name="qty" id="qtynumnber-{{$data->id}}"  style="font-size: 1.3rem;">
                  @else
                  <input type="text" class="form-control col input-qty" name="qty" id="qtynumnber-{{$data->id}}"  style="font-size: 1.3rem;" disabled>
                  @endif
                  @if($data->status =="ready")
                  <button class=" btn bg-green text-white ms-1" onclick="event.preventDefault();console.log('plux clicked');
                  if( document.getElementById('qtynumnber-{{$data->id}}').value==''){
                    document.getElementById('qtynumnber-{{$data->id}}').value=0;
                    document.getElementById('qtynumnber-{{$data->id}}').value=parseInt(document.getElementById('qtynumnber-{{$data->id}}').value)+1
                  }else{
                    document.getElementById('qtynumnber-{{$data->id}}').value=parseInt(document.getElementById('qtynumnber-{{$data->id}}').value)+1;
                  }
                " data-demo-color>+</button>
                     @endif
                </div>
         
                <div class="d-flex justify-content-end w-100">
                  @if($data->status =="ready")
                  <button class="btn btn-secondary mt-2"  id="btn-tambahitem"
                  type="submit"
                  onclick="if( document.getElementById('qtynumnber-{{$data->id}}').value==''){
                   event.preventDefault();
                  }"
                   >+ Tambah Item</button>
                   @else
                   <button class="btn btn-secondary mt-2"  id="btn-tambahitem"
                   type="submit" disabled
                    >+ Tambah Item</button>
                   @endif
                </div>
              </div>
              <input type="text" value="{{$data -> id}}" name="id" class="d-none">
              <input type="text" value="{{$data -> harga}}" name="harga" class="d-none">
            
            </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach


     





    
    

    </div>
  </div>

@endsection

