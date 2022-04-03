<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vol_accounts', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama_user');
            $table->string('email');
            $table->string('tanggal_lahir');
            $table->string('gender');
            $table->string('alamat');
            $table->string('foto_profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vol_accounts');
    }
}
