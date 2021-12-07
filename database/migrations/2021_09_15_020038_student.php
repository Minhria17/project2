<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->integerIncrements('id_student');
            $table->string('MSV',10)->unique();
            $table->string('name',50);
            $table->string('gender');
            $table->date('birthday');
            $table->string('email',255);
            $table->string('phone',20);
            $table->integer('id_classroom')->unsigned();
            $table->foreign('id_classroom')->references('id_classroom')->on('classroom')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
