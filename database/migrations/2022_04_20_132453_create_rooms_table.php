<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->string('nama_kategruang');
            $table->string('nama_gudang');
            $table->unsignedBigInteger('id_roomcategory');
            $table->unsignedBigInteger('id_warehouse');
            $table->foreign('id_roomcategory')->references('id')->on('room_categories');
            $table->foreign('id_warehouse')->references('id')->on('warehouses');
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
        Schema::dropIfExists('rooms');
    }
}
