<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->string('nama_gudang');
            $table->string('deskripsi');
            $table->string('nama_peminjam');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->unsignedBigInteger('id_room');
            $table->unsignedBigInteger('id_warehouse');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->foreign('id_warehouse')->references('id')->on('warehouses');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrow_rooms');
    }
}
