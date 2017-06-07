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
            $table->integer('membre_id')->unsigned();
            $table->integer('equipe_id')->unsigned();
            $table->string('fonction');
            $table->string('departement');
            $table->integer('anneeEtude');
            $table->timestamps();
            $table->foreign('membre_id')->references('id')->on('membres');
            $table->foreign('equipe_id')->references('id')->on('equipes');
            $table->index(['membre_id', 'equipe_id']);
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
