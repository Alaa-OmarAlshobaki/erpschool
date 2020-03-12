<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->not
            $table->string('Course_Name')->nullable(false);
            $table->string('description')->nullable(false);
            $table->string('code')->nullable(false);
            $table->integer('Total_Working_Hours')->nullable(false);
            $table->unsignedBigInteger('classes_id');
            $table->timestamps();
           $table->foreign('classes_id')->references('id')->on('classes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
