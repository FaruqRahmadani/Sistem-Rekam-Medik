<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameFieldRakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('raks', function (Blueprint $table) {
        $table->integer('baris')->after('tinggi');
        $table->dropColumn('tinggi');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('raks', function (Blueprint $table) {
        $table->integer('tinggi')->after('baris');
        $table->dropColumn('baris');
      });
    }
}
