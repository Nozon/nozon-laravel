<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('titre');
            $table->text('description');
            $table->date('date');
            $table->integer('edition_annee')->unsigned(); // Est-ce qu'il faut vraiment ajouter le "unsigned" si c'est déjà précisé dans la migration de editions_table?
            $table->foreign('edition_annee')->references('annee')->on('editions');
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
        Schema::dropIfExists('presses');
    }
}
