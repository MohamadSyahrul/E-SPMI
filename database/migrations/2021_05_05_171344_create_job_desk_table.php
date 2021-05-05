<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDeskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_desk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_job');
            $table->integer('id_jabatan');
            $table->integer('id_penanggung_jawab');
            $table->text('deskripsi');
            $table->date('tgl_terima');
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
        Schema::dropIfExists('job_desk');
    }
}
