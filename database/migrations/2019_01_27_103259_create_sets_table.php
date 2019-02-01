<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('fishing_rod_id')->nullable()->unsigned();
            $table->integer('line_id')->nullable()->unsigned();
            $table->integer('reel_id')->nullable()->unsigned();
            $table->integer('hook_id')->nullable()->unsigned();
            $table->integer('leader_id')->nullable()->unsigned();
            $table->string('name');
            $table->timestamps();
        });

        
        Schema::table('sets', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('fishing_rod_id')->references('id')->on('fishing_rods');
            $table->foreign('line_id')->references('id')->on('lines');
            $table->foreign('reel_id')->references('id')->on('reels');
            $table->foreign('hook_id')->references('id')->on('hooks');
            $table->foreign('leader_id')->references('id')->on('leaders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sets');
    }
}
