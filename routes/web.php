<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pencatatan_pesanan;
use App\Http\Controllers\daftarpesanan_Controller;
use App\Http\Controllers\catatPembayaran_Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catat-pesanan/order',[pencatatan_pesanan::class,'order'])->name('order');
Route::get('/catat-pesanan/Create-item',[pencatatan_pesanan::class,'createItem'])->name('createitem');
Route::post('/catat-pesanan/catatorderbaru',[pencatatan_pesanan::class,'InputNomerOrder'])->name('InputOrder');
Route::get('/catat-pesanan/tambahitem',[pencatatan_pesanan::class,'tambahitem'])->name('tambah item activity');
Route::resource('home', HomeController::class);
Route::resource('catat-pesanan',pencatatan_pesanan::class);
Route::resource('daftar-pesanan',daftarpesanan_Controller::class);
Route::resource('catat-pembayaran',catatPembayaran_Controller::class);
