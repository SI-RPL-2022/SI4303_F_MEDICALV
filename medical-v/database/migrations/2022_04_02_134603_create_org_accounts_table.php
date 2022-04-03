<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_accounts', function (Blueprint $table) {
            $table->id('id_organisasi');
            $table->string('nama_organisasi');
            $table->string('alamat_organisasi');
            $table->string('password');
            $table->string('logo_organisasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('org_accounts');
    }
}
