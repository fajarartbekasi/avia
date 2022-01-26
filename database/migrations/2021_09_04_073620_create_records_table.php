<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('box_id')->nullable();
            $table->unsignedInteger('classification_id')->nullable();
            $table->string('nomor_portapel')->nullable();
            $table->string('nomor_berkas')->nullable();
            $table->string('info_berkas')->nullable();
            $table->string('durasi')->nullable();
            $table->string('jumlah')->nullable();
            $table->longText('uraian')->nullable();
            $table->string('aktif')->nullable();
            $table->string('in_aktif')->nullable();
            $table->string('tindak_lanjut')->nullable();
            $table->string('media')->nullable();
            $table->string('reg_ska')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('jenis')->nullable();
            $table->string('tgl_doc')->nullable();
            $table->string('jumlah_lembar')->nullable();
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
        Schema::dropIfExists('records');
    }
}
