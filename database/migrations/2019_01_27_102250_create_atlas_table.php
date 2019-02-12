<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtlasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fishs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('photo_link');
            $table->text('info');
            $table->timestamps();
        });

        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area');
            $table->text('info');
            $table->timestamps();
        });

        Schema::create('protects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fish_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->date('date_from');
            $table->date('date_to');
            $table->text('info');
            $table->timestamps();
        });

        Schema::table('protects', function($table) {
            $table->foreign('fish_id')->references('id')->on('fishs');
            $table->foreign('place_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fishs');
        Schema::dropIfExists('place');
        Schema::dropIfExists('protect');
    }
}
