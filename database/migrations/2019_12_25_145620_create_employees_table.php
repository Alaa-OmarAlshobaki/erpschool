<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName')->nullable(false);
            $table->string('middleName')->nullable(false);
            $table->string('lastName')->nullable(false);
            $table->integer('employee_admission_no')->nullable(false);
            $table->integer('employee_ID_number')->nullable(false);
            $table->integer('Passport_number')->nullable(false);
            $table->string('Nationality')->nullable(false);
            $table->unsignedBigInteger('Department_id')->nullable(false);
            $table->date('BirthDate')->nullable(false);
            $table->unsignedBigInteger('position_id')->nullable(false);
            $table->unsignedBigInteger('Profession_id')->nullable(false);
            $table->date('Date_of_work')->nullable(false);
            $table->date('Work_start_date')->nullable(false);
            $table->string('avatar')->nullable(false);
            $table->integer('salary')->nullable(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Phone')->unique()->nullable(false);
            $table->string('Mobile')->unique()->nullable(false);
            $table->string('Soical_Status')->nullable(false);
            $table->string('password');
            $table->smallInteger('gender', false, true)->default(0);
            $table->string('address')->nullable(false);
            $table->rememberToken();
            $table->timestamps();
          
            $table->foreign('Department_id')->references('id')->on('departments');
            $table->foreign('Profession_id')->references('id')->on('professions');
            $table->foreign('position_id')->references('id')->on('positions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
