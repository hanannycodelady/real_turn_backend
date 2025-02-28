<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overviews', function (Blueprint $table) {
            $table->id();
            $table->integer('player_id');
            $table->integer('ranking');
            $table->string('category');
            $table->string('player_image');
            $table->string('first_name');
            $table->string('last_name');
            $table->decimal('height', 5, 2);
            $table->string('plays');
            $table->integer('age');
            $table->date('date_of_birth');
            $table->string('coach_name');
            $table->decimal('win_lose_ratio', 5, 2);
            $table->integer('current_ranking');
            $table->string('video_url');
            $table->text('video_description');
            $table->integer('video_order');
            $table->integer('title_year');
            $table->string('title_image');
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
        Schema::dropIfExists('overviews');
    }
}
