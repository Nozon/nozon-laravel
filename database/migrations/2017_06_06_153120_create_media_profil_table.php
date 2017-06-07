<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_profil', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:database/migrations/2017_06_06_104033_create_media_profil_table.php
            $table->integer('profil_equipe_id')->unsigned();
            $table->integer('profil_membre_id')->unsigned();
            $table->integer('media_id')->unsigned();
=======
            $table->integer('media_id');
            $table->integer('profil_equipe_id');
            $table->integer('profil_membre_id');
>>>>>>> origin/backend:database/migrations/2017_06_06_153120_create_media_profil_table.php
            $table->foreign('media_id')->references('id')->on('medias');
            $table->foreign('profil_equipe_id')->references('equipe_id')->on('profils');
            $table->foreign('profil_membre_id')->references('membre_id')->on('profils');
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
        Schema::dropIfExists('media_profil');
    }
}
