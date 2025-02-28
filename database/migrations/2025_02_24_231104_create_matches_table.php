<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id(); // Laravel auto-creates 'id' as primary key
            $table->datetime('match_date');
            $table->string('opponent_first_name');
            $table->string('opponent_last_name');
            $table->string('tournament');
            $table->string('score');
            $table->string('match_round');
            $table->string('result');
            $table->time('duration');
            $table->string('surface');
            $table->string('location');
            $table->decimal('prize_money', 10, 2); // Prize money with decimals
            $table->string('prize_money_currency', 3); // Currency code (USD, UGX)
            $table->integer('opponent_ranking');
            $table->string('oppo_flag_image');
            $table->string('oppo_country');
            $table->string('status');
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
        Schema::dropIfExists('matches');
    }
}
