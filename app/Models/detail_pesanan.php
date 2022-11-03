<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'id_pesanan',
        'menu_id',
        'qty',
        'waktu_transaksi',
       
    ];
}
