<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gdms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_asset', 10)->unique();
            $table->string('no_id', 20);
            $table->integer('tipe_id')->unsigned();
            $table->integer('kondisi_id')->unsigned();
            $table->date('tgl_masuk_wh');
            $table->string('catatan', 50);
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
        Schema::dropIfExists('gdms');
    }
}