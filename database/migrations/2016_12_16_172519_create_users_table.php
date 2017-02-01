<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim')->unique();
            $table->string('password');
            $table->string('nama');
            // $table->integer('progdi')->unsigned();
            $table->string('progdi');
            $table->string('role');
            $table->timestamps();

            // $table->foreign('progdi')
            //       ->references('id')->on('progdis')
            //       ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
