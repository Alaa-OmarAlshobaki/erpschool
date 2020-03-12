<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Start_Year')->nullable(false);
            $table->date('Start_Month')->nullable(false);
            $table->date('End_Year')->nullable(false);
            $table->date('End_Month')->nullable(false);
            $table->smallInteger('status', false, true)->default(0);
            $table->unsignedBigInteger('institution_id');
            $table->timestamps();
           
            $table->foreign('institution_id')->references('id')->on('institutions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academics');
    }
}
