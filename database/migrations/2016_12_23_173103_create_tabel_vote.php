<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('votes', function (Blueprint $table) {
          $table->integer('id_user');
          $table->integer('id_pemira')->unsigned();
          $table->timestamps();

          $table->primary('id_user');
          $table->foreign('id_pemira')
                ->references('id')->on('pemiras')
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
        Schema::dropIfExists('votes');
    }
}
