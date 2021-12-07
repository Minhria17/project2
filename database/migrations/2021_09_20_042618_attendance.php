<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->integerIncrements('id_attendance');
            $table->unsignedInteger('id_subject');
			$table->foreign('id_subject')->references('id_subject')->on('subject')->onDelete('cascade');
            $table->unsignedInteger('id_classroom');
			$table->foreign('id_classroom')->references('id_classroom')->on('classroom')->onDelete('cascade');           
            $table->unsignedInteger('id_student');
			$table->foreign('id_student')->references('id_student')->on('student')->onDelete('cascade');
            $table->tinyInteger('status');
            $table->string('note', 200);
            $table->unsignedInteger('id_studytime');
			$table->foreign('id_studytime')->references('id_studytime')->on('studytime')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
}
