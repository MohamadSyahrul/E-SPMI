<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButirstandarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('butirstandars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_standar');
            $table->string('kode_butir');
            $table->text('isi');
            $table->string('indikator');
            $table->date('tgl_butir');
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
        Schema::dropIfExists('butirstandars');
    }
}
