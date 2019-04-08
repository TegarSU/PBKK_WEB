<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_krs');
            $table->integer('mahasiswas_id')->reference('id')->on('mahasiswas')->unsigned()->nullable();
            $table->integer('kelas_id')->reference('id')->on('kelas')->unsigned()->nullable();
            // $table->string('kelasdiambil');
            $table->string('nilai');
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
        Schema::dropIfExists('frs');
    }
}
