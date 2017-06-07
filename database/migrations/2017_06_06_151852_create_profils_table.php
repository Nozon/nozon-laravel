<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:database/migrations/2017_06_06_103648_create_profils_table.php
            $table->integer('membre_id')->unsigned();
            $table->integer('equipe_id')->unsigned();
            $table->foreign('membre_id')->references('id')->on('membres');
            $table->foreign('equipe_id')->references('id')->on('equipes');
=======
            $table->integer('membre_id');
            $table->integer('equipe_id');
>>>>>>> origin/backend:database/migrations/2017_06_06_151852_create_profils_table.php
            $table->string('fonction');
            $table->string('departement');
            $table->string('anneeEtude');
            $table->timestamps();
            $table->foreign('membre_id')->references('id')->on('membres');
            $table->foreign('equipe_id')->references('id')->on('equipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
}
