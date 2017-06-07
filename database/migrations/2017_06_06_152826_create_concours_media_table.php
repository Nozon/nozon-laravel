<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcoursMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concours_media', function (Blueprint $table) {
            $table->timestamps();
<<<<<<< HEAD:database/migrations/2017_06_06_104217_create_concours_media_table.php
            $table->integer('concours_id')->unsigned();
            $table->integer('media_id')->unsigned();
=======
            $table->integer('concours_id');
            $table->integer('media_id');
>>>>>>> origin/backend:database/migrations/2017_06_06_152826_create_concours_media_table.php
            $table->foreign('concours_id')->references('id')->on('concours');
            $table->foreign('media_id')->references('id')->on('media');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concours_media');
    }
}
