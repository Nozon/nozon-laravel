<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edition_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edition_id');
            $table->integer('media_id');
            $table->foreign('edition_id')->references('id')->on('editions');
            $table->foreign('media_id')->references('id')->on('media');
            $table->index(['edition_id','media_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edition_media');
    }
}
