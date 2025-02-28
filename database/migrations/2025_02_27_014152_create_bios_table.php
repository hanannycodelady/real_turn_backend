<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio', function (Blueprint $table) {
            $table->id();
            $table->integer('player_id');
            $table->string('more_about_player');

            // First section: About the player
            $table->string('sub_heading1');
            $table->text('paragraph1');

            // Career highlights section
            $table->string('career_highlights');

            // Second section: Additional details
            $table->text('paragraph2');

            // Career review section
            $table->text('career_review');

            // Extra paragraph (if needed)
            $table->text('paragraph3');

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
        Schema::dropIfExists('bio');
    }
}
