<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipeMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe_media', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:database/migrations/2017_06_06_104122_create_equipe_media_table.php
            $table->integer('equipe_id')->unsigned();
            $table->integer('media_id')->unsigned();
=======
            $table->integer('equipe_id');
            $table->integer('media_id');
>>>>>>> origin/backend:database/migrations/2017_06_06_152910_create_equipe_media_table.php
            $table->foreign('equipe_id')->references('id')->on('equipes');
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
        Schema::dropIfExists('equipe_media');
    }
}
