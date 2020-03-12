<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('class')->nullable(false);
            $table->string('branch')->nullable(true);
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('academics_id');

            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students');
           $table->foreign('academics_id')->references('id')->on('academics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
