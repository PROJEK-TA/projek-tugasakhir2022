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
            $table->text('deskripsi');
            $table->double('jumlah');
            $table->date('tanggal_nonaktif');
            $table->unsignedBigInteger('id_product');
            $table->foreign('id_product')->references('id')->on('products');
            $table->unsignedBigInteger('id_statusbarang');
            $table->foreign('id_statusbarang')->references('id')->on('status_products');
            
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
