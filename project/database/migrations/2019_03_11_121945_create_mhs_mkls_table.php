<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMhsMklsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mhs_mkls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswa_id')->reference('id')->on('mahasisawas')->unsigned()->nullable();
            $table->integer('mata_kuliah_id')->reference('id')->on('mata_kuliahs')->unsigned()->nullable();
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
        Schema::dropIfExists('mhs_mkls');
    }
}
