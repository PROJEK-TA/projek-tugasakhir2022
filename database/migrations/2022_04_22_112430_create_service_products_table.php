<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('deskripsi');
            $table->double('jumlah');
            $table->string('nama_petugas');
            $table->date('tanggal_servis');
            $table->date('tanggal_kembali');
            $table->foreign('id_barang')->references('id')->on('products');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_products');
    }
}
