<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonaktifProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonaktif_products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('deskripsi');
            $table->double('jumlah');
            $table->string('status');
            $table->date('tanggal_nonaktif');
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
        Schema::dropIfExists('nonaktif_products');
    }
}
