<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_sponsor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sponsor_nom');
            $table->integer('media_id');
            $table->foreign('sponsor_nom')->references('nom')->on('sponsors');
            $table->foreign('media_id')->references('id')->on('medias');
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
        Schema::dropIfExists('media_sponsor');
    }
}
