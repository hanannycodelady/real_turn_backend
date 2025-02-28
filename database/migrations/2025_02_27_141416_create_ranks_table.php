<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRanksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->id('id');
            $table->integer('player_id');
            $table->integer('rank');
            $table->date('ranking_date');
            $table->integer('previous_rank');
            $table->integer('single_career_highest_rank');
            $table->date('single_career_highest_date');
            $table->integer('double_career_highest_rank');
            $table->date('double_career_highest_date');
            $table->integer('mixed_doubles_highest_rank');
            $table->date('mixed_doubles_highest_date');
            $table->integer('year');
            $table->integer('year_start_rank');
            $table->integer('year_end_rank');
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
        Schema::drop('ranks');
    }
}
