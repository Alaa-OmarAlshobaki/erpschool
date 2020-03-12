<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_admission_no')->nullable(false);
            $table->date('student_admission_date')->nullable(false);
            $table->string('student_firstname')->nullable(false);
            $table->string('student_middlename')->nullable(false);
            $table->string('student_lastname')->nullable(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable(false);
            $table->smallInteger('gender', false, true)->default(0);
            $table->string('city')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('street')->nullable(false);
            $table->string('placeOfBirth')->nullable(false);
            $table->integer('ID_number')->nullable(false);
            $table->smallInteger('statuse', false, true)->default(0);
            $table->string('avatar')->nullable(false);
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('guardians_id');
           $table->foreign('guardians_id')->references('id')->on('guardians');
          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
