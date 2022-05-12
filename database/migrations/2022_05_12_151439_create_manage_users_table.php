<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('kontak');
            $table->string('alamat');
            $table->string('nama_role');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_role')->references('id')->on('roles');
            $table->rememberToken();
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
        Schema::dropIfExists('manage_users');
    }
}
