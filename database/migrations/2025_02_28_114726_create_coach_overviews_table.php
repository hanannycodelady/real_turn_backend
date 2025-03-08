<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachOverviewsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_overviews', function (Blueprint $table) {
            $table->id('id');
            $table->integer('player_id');
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('profile_image');
            $table->string('nationality');
            $table->string('country_flag');
            $table->string('latest_video');
            $table->text('latest_video_description');
            $table->string('latest_image');
            $table->text('latest_image_description');
            $table->string('player_name');
            $table->string('player_image');
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
        Schema::drop('coach_overviews');
    }
}
