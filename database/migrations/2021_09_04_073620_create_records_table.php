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
            $table->unsignedInteger('box_id');
            $table->unsignedInteger('classification_id');
            $table->string('nomor_portagel');
            $table->string('nomor_berkas');
            $table->string('info_berkas');
            $table->string('durasi');
            $table->string('jumlah');
            $table->string('uraian');
            $table->string('aktif');
            $table->string('in_aktif');
            $table->string('tindak_lanjut');
            $table->string('media');
            $table->string('reg_ska');
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
