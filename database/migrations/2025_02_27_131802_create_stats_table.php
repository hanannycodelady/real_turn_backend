<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer('player_id');
            $table->integer('match_played');
            $table->integer('match_won');
            $table->integer('match_lost');
            $table->integer('aces');
            $table->integer('double_faults');
            $table->integer('first_serve_percentage');
            $table->decimal('first_serve_percentage_won', 5, 2);
            $table->decimal('first_serve_points_won', 5, 2);
            $table->decimal('second_serve_points_won', 5, 2);
            $table->decimal('break_points_saved', 5, 2);
            $table->decimal('service_game_won', 5, 2);
            $table->decimal('service_points_won', 5, 2);
            $table->decimal('return_point_won', 5, 2);
            $table->decimal('break_points_converted', 5, 2);
            $table->decimal('return_points_won', 5, 2);
            $table->decimal('total_points', 5, 2);
            $table->integer('tournaments_played');
            $table->decimal('winning_on_first_serve', 5, 2);
            $table->decimal('winning_on_second_serve', 5, 2);
            $table->integer('rank');
            $table->decimal('second_return_points_won', 5, 2);
            $table->decimal('return_games_played', 5, 2);
            $table->integer('year');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
