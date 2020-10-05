<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalRuangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_ruang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ruang_id');
            $table->integer('mapel_id');
            $table->integer('jam_ke');
            $table->timestamps();
        });

        // $table->foreign('ruang_id')->references('id')->on('ruang');
        // $table->foreign('mapel_id')->references('id')->on('mapel');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_ruang');
    }
}
