<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_pesanans', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal');
            $table->integer('menu_id')->nullable();
            $table->integer('qty');
            $table->string('nomormeja');
            $table->string('nomorpesanan');
            $table->integer('jumlahItemMenu');
            $table->integer('TotalNominalPembelanjaan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_pesanans');
    }
}
