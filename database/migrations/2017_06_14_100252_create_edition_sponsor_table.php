<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edition_sponsor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edition_annee')->unsigned();
            $table->string('sponsor_nom');
            $table->enum('valeur', ['principal', 'or', 'argent', 'bronze']);
            $table->timestamps();
            $table->foreign('edition_annee')->references('annee')->on('editions');
            $table->foreign('sponsor_nom')->references('nom')->on('sponsors');
            $table->index(['edition_annee','sponsor_nom']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edition_sponsor');
    }
}
