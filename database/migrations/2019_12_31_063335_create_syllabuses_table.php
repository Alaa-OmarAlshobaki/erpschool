<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syllabuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Syllabus_Name')->unique()->nullable(false);
            $table->unsignedBigInteger('courses_id');
            $table->date('date')->nullable(false);
            $table->string('topic')->nullable(false);
            $table->string('due_on_this_date')->nullable(false);
            $table->string('description')->nullable(false);
            $table->timestamps();
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
        Schema::dropIfExists('syllabuses');
    }
}
