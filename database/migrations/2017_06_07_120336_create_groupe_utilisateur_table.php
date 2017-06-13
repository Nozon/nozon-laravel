<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('groupe_id')->unsigned();
            $table->integer('utilisateur_id')->unsigned();            
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
            $table->foreign('groupe_id')->references('id')->on('groupes');
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
        Schema::dropIfExists('groupe_utilisateur');
    }
}
