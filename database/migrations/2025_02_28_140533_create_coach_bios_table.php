<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachBiosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_bios', function (Blueprint $table) {
            $table->id('id');
            $table->string('heading_1');
            $table->text('content_1');
            $table->string('heading_2');
            $table->text('content_2');
            $table->string('heading_3');
            $table->text('content_3');
            $table->string('heading_4');
            $table->text('content_4');
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
        Schema::drop('coach_bios');
    }
}
