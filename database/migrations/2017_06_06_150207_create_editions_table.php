<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            // On enlève l'id pour voir si ça règle le problème de fk quand on migre sur pingouin
            $table->increments('id');
            $table->integer('annee')->unsigned()->unique();
            $table->text('textePresentation');
            $table->text('texteConcours');
            $table->string('lieu');
            $table->date('dateConcours');
            $table->timestamps();
            // On ajoute la clé primaire sur l'année pour voir si ça règle le problème de fk quand on migre sur pingouin
            //$table->primary('annee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editions');
    }
}
