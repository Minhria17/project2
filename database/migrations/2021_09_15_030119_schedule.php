<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->integerIncrements('id_schedule');
            $table->integer('id_teacher')->unsigned();
            $table->foreign('id_teacher')->references('id_teacher')->on('teacher')->onDelete('cascade');
            $table->integer('id_subject')->unsigned();
            $table->foreign('id_subject')->references('id_subject')->on('subject')->onDelete('cascade');
            $table->integer('id_classroom')->unsigned();
            $table->foreign('id_classroom')->references('id_classroom')->on('classroom')->onDelete('cascade');
            $table->integer('id_studytime')->unsigned();
            $table->foreign('id_studytime')->references('id_studytime')->on('studytime')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
