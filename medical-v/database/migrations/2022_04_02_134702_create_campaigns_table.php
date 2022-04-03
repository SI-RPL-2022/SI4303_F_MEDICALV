<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id('campaign_id');
            $table->string('nama_campaign');
            $table->string('kategori');
            $table->unsignedBigInteger('org_id');
            $table->string('org_name');
            $table->date('tgl_mulai_campaign');
            $table->date('tgl_selesai_campaign');
            $table->date('tgl_mulai_pendaftaran');
            $table->date('tgl_selesai_pendaftaran');
            $table->string('deskripsi');
            $table->string('verif_status');
            $table->string('campaign_status');

            $table->foreign('org_id')->references('id_organisasi')->on('org_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
