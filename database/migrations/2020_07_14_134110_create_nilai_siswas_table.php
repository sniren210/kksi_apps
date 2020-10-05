<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nilai');
            $table->integer('siswa_id');
            $table->integer('mapel_id');
            $table->timestamps();
        });

        // $table->foreign('siswa_id')->references('id')->on('siswa');
        // $table->foreign('mapel_id')->references('id')->on('mapel');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_siswa');
    }
}
