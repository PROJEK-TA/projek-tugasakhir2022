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
            $table->date('tanggal_input');
            $table->unsignedBigInteger('id_productcategory');
            $table->unsignedBigInteger('id_room');
            $table->unsignedBigInteger('id_department');
            $table->unsignedBigInteger('id_statusproduct');
            $table->foreign('id_productcategory')->references('id')->on('product_categories');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->foreign('id_department')->references('id')->on('departments');
            $table->foreign('id_statusproduct')->references('id')->on('status_products');
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
