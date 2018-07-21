<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('pasiens', function (Blueprint $table) {
      $table->increments('id');
      $table->string('no_rm', 20);
      $table->string('nik', 16);
      $table->string('nama', 100);
      $table->string('tempat_lahir', 50);
      $table->date('tanggal_lahir');
      $table->integer('jenis_kelamin');
      $table->integer('pekerjaan');
      $table->integer('agama');
      $table->string('alamat');
      $table->string('no_telepon');
      $table->softDeletes();
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
    Schema::dropIfExists('pasiens');
  }
}
