<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam geprek oke',
            'harga'=>'32000',
            'gambar'=>'./static/products/geprek mantap.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam geprek cihuy',
            'harga'=>'34999',
            'gambar'=>'./static/products/geprek_mantap2.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam geprek ambar',
            'harga'=>'35000',
            'gambar'=>'./static/products/geprek_mantap3.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam geprek ibu onah',
            'harga'=>'36000',
            'gambar'=>'./static/products/geprek2.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam geprek pak mansur',
            'harga'=>'37000',
            'gambar'=>'./static/products/ayam_kres.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
      
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam geprek ujang bihin',
            'harga'=>'21000',
            'gambar'=>'./static/products/geprek3.png',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
      
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'bebek betutu',
            'harga'=>'55000',
            'gambar'=>'./static/products/betutu1.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam kalasan',
            'harga'=>'35000',
            'gambar'=>'./static/products/kalasan1.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'ayam kalasan keren',
            'harga'=>'45000',
            'gambar'=>'./static/products/kalasan2.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'minuman segar',
            'harga'=>'15000',
            'gambar'=>'./static/products/minuman1.webp',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'minuman oke',
            'harga'=>'17000',
            'gambar'=>'./static/products/minuman2.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'minuman keren',
            'harga'=>'19000',
            'gambar'=>'./static/products/minuman3.jpeg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'minuman empat',
            'harga'=>'21000',
            'gambar'=>'./static/products/minuman4.webp',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'lima drink',
            'harga'=>'23000',
            'gambar'=>'./static/products/minuman5.jpeg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'minuman six',
            'harga'=>'25000',
            'gambar'=>'./static/products/minuman6.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'nine cloud drink',
            'harga'=>'27000',
            'gambar'=>'./static/products/minuman9.webp',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
        DB::table('daftar_menus')->insert([
            'Nama_Menu'=>'tahu lada garam',
            'harga'=>'21000',
            'gambar'=>'./static/products/tahu1.jpg',
            'deskripsi'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!',
            'status'=>'ready'
        ]);
      
    }
}
