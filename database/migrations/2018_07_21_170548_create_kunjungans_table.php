<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKunjungansTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('kunjungans', function (Blueprint $table) {
      $table->increments('id');
      $table->text('keluhan');
      $table->integer('poli_id');
      $table->integer('pasien_id');
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
    Schema::dropIfExists('kunjungans');
  }
}
