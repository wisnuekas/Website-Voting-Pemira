<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pemiras', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama_pres');
          $table->string('nama_wapres');
          $table->string('nim_pres')->unique();
          $table->string('nim_wapres')->unique();
          $table->string('progdi_pres');
          $table->string('progdi_wapres');
          $table->string('fakultas_pres');
          $table->string('fakultas_wapres');
          $table->float('ipk_pres', 3, 2);
          $table->float('ipk_wapres', 3, 2);
          $table->string('gbr_pres');
          $table->string('gbr_wapres');
          $table->string('visi');
          $table->text('misi');
          $table->string('gbr_pres_wapres');
          $table->integer('jumlah_vote')->nullable()->default(0);
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
      Schema::drop('pemiras');
    }
}
