<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeRessourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_ressource', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('ressource_id')->unsigned();
            $table->integer('groupe_id')->unsigned();
            $table->foreign('ressource_id')->references('id')->on('ressources');
            $table->foreign('groupe_id')->references('id')->on('groupes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_ressource');
    }
}
