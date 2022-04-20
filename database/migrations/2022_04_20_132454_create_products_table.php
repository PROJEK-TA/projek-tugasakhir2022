<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('nama_kategbarang');
            $table->string('nama_ruangan');
            $table->string('nama_departemen');
            $table->double('harga_beli');
            $table->double('jumlah');
            $table->string('nama_status');
            $table->timestamps('tanggal input');
            $table->foreign('id_kategbarang')->references('id')->on('product_categories');
            $table->foreign('id_ruangan')->references('id')->on('rooms');
            $table->foreign('id_departemen')->references('id')->on('departments');
            $table->foreign('id_status')->references('id')->on('status_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
