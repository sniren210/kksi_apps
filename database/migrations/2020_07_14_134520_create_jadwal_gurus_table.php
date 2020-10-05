<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('guru_id');
            $table->integer('mapel_id');
            $table->integer('jam_ke');
            $table->timestamps();
        });

        // $table->foreign('guru_id')->references('id')->on('guru');
        // $table->foreign('mapel_id')->references('id')->on('mapel');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_guru');
    }
}
