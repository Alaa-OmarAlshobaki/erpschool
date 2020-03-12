<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable(false);
            $table->time('time')->nullable(false);
            $table->string('room')->nullable(false);
            $table->string('code')->nullable(false);
            $table->string('lead_teacher')->nullable(false);
            $table->unsignedBigInteger('classes_id')->nullable(false);
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
        Schema::dropIfExists('timetables');
    }
}
