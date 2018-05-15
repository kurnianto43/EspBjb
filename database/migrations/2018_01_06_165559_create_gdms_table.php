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
            $table->string('catatan', 50)->nullable();
            $table->string('foto_gdm')->default('gdm.png')->nullable();
            $table->timestamps();
            $table->foreign('tipe_id')->references('id')->on('tipes');
            $table->foreign('kondisi_id')->references('id')->on('kondisis');
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