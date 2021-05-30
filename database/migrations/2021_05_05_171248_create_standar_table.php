<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit');
            $table->integer('id_sn');
            $table->string('kode_standar');
            $table->string('nama');
            $table->integer('id_penanggung_jawab');
            $table->date('tgl_standar');
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
        Schema::dropIfExists('standar');
    }
}
