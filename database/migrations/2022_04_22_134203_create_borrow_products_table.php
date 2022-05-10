<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('nama_ruangan');
            $table->string('nama_departemen');
            $table->double('jumlah');
            $table->string('nama_peminjam');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_room');
            $table->unsignedBigInteger('id_department');
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->foreign('id_department')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrow_products');
    }
}
