<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('progdis', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kd_progdis')->unique();
        $table->string('nama');
        $table->integer('fakultas')->unsigned();
        $table->timestamps();

        $table->foreign('fakultas')
              ->references('id')->on('fakultass')
              ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progdis');
    }
}
