<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id('id');
            $table->String('Tournament_name');
            $table->string('tournament_category');
            $table->date('Start_date');
            $table->date('end_date');
            $table->string('Venue');
            $table->string('Location');
            $table->string('surface');
            $table->decimal('Prize_money');
            $table->string('certificate');
            $table->string('status');
            $table->string('sponsor_name');
            $table->integer('Draw_size');
            $table->string('Tournament_logo');
            $table->string('Tournament_director');
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
        Schema::drop('tournaments');
    }
}
