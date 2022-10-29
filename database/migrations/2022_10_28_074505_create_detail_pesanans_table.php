<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pesanan')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->integer('qty');
            $table->timestamp('waktu_transaksi')->useCurrent();
            $table->foreign('id_pesanan')->references('id')->on('daftar_pesanans')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('daftar_menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pesanans');
    }
}
