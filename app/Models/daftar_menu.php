<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_menu extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'Nama_Menu',
        'harga',
        'gambar',
        'deskripsi',
        'status'
    ];
}
