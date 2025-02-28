<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id('id');
            $table->string('First_name');
            $table->string('Second_name');
            $table->string('gender');
            $table->string('Player_image')->nullable(); 
            $table->string('Flag_image')->nullable();
            $table->integer('ranking');
            $table->integer('Points');
            $table->string('Category');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
