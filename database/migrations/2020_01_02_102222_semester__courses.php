<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SemesterCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_courses',function(Blueprint $table){
         $table->bigInteger('semesters_id')->unsigned();
         $table->bigInteger('courses_id')->unsigned();
         $table->primary(['semesters_id','courses_id']);
         $table->foreign('semesters_id')->references('id')->on('semesters');
         $table->foreign('courses_id')->references('id')->on('courses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
