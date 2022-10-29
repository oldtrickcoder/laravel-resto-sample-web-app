<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\daftar_meja;
use App\Models\daftar_menu;
use App\Models\daftar_pesanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        
        $daftar_mejas=daftar_meja::where('status','=','kosong')->count();
        $menu_tersedia=daftar_menu::where('status','=','ready')->count();
        $pesanan_blmdilayani=daftar_pesanan::where('status','=','belum dibayar')->count();
     
        return view('home',['avlbltable'=>$daftar_mejas,'avlblmenu'=>$menu_tersedia,'pesanan_blmdbyr'=>$pesanan_blmdilayani]) ;
        
        // view('home');
        //['avlbltable'=>$daftar_mejas,'avlblmenu'=>$menu_tersedia,'pesanan_blmdbyr'=>$pesanan_blmdilayani]
        // ['avlbltable'=>$daftar_mejas,'avlblmenu'=>$menu_tersedia];
    }

}
