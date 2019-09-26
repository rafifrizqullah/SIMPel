<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direktorat');
            $table->string('divisi');
            $table->string('bagian');
            $table->text('uraian_tugas');
            $table->text('kompetensi');
            $table->text('tema_pelatihan');
            $table->text('sasaran');
            $table->text('target_peserta');
            $table->string('tempat_penyelenggaraan');
            $table->date('tanggal_penyelenggaraan');
            $table->string('jumlah_peserta');
            $table->string('durasi');
            $table->string('file_proposal');
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
        Schema::dropIfExists('submissions');
    }
}
