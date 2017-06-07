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
<<<<<<< HEAD:database/migrations/2017_06_06_104558_create_media_sponsor_table.php
            $table->string('sponsor_nom')->unsigned();
            $table->integer('media_id')->unsigned();
=======
            $table->string('sponsor_nom');
            $table->integer('media_id');
>>>>>>> origin/backend:database/migrations/2017_06_06_152649_create_media_sponsor_table.php
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
