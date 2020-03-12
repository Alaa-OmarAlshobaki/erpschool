<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('courses_id')->nullable(false);
            $table->string('first_exam')->nullable(false);
            $table->integer('mark_of_first_exam')->nullable(false);
            $table->string('second_exam')->nullable(false);
            $table->integer('mark_of_sec_exam')->nullable(false);
            $table->string('third_exam')->nullable(false);
            $table->integer('mark_of_third_exam')->nullable(false);
            $table->string('final_exam')->nullable(false);
            $table->integer('mark_of_final_exam')->nullable(false);
            $table->string('activity_Of_stu')->nullable(false);
            $table->integer('mark_of_activity')->nullable(false);
            $table->foreign('courses_id')->references('id')->on('courses');


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
        Schema::dropIfExists('marks');
    }
}
