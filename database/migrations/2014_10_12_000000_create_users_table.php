<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('id_unit');
            $table->string('nama_user');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin',['L','P'])->default('L');
            $table->string('no_telp');
            $table->string('gambar_user');
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
