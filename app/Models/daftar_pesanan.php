<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_pesanan extends Model
{
    use HasFactory;
    protected $fillable=[
        'Tanggal',
        'qty',
        'nomormeja',
        'nomorpesanan',
        'jumlahItemMenu',
        'TotalNominalPembelanjaan',
        'status'
    ];
}
