<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('attend', false, true)->default(0);
            $table->date('date');
            $table->timestamps();
            $table->unsignedBigInteger('students_id');
            $table->foreign('students_id')->references('id')->on('students');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendes');
    }
}
