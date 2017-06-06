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
