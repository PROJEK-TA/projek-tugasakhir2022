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
            $table->double('harga_beli');
            $table->double('jumlah');
            $table->string('satuan');
            $table->date('tanggal_input');
            $table->timestamps();
            $table->unsignedBigInteger('id_productcategory');
            $table->unsignedBigInteger('id_room');
            $table->unsignedBigInteger('id_department');
            $table->unsignedBigInteger('id_statusproduct');
            $table->unsignedBigInteger('id_merkproduct');
            $table->unsignedBigInteger('id_lokasiproduct');
            $table->foreign('id_productcategory')->references('id')->on('product_categories');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->foreign('id_department')->references('id')->on('departments');
            $table->foreign('id_statusproduct')->references('id')->on('status_products');
            $table->foreign('id_merkproduct')->references('id')->on('merk_products');
            $table->foreign('id_lokasiproduct')->references('id')->on('location_products');
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
