<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fnameForFather')->nullable(false);
            $table->string('lnameForFather')->nullable(false);
            $table->string('fnameForMother')->nullable(false);
            $table->string('lnameForMother')->nullable(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('city')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('street')->nullable(false);
            $table->integer('ID_number_Father')->nullable(false);
            $table->integer('ID_number_Mather')->nullable(false);
            $table->string('placeOfBirthMather')->nullable(false);
            $table->string('placeOfBirthFather')->nullable(false);
            $table->date('birthdateForMa')->nullable(false);
            $table->date('birthdateForFa')->nullable(false);
            $table->string('fatherJob')->nullable(false);
            $table->string('motherJob')->nullable(false);
            $table->string('qualificationFather')->nullable(false);
            $table->string('qualificationMather')->nullable(false);
            $table->integer('Average_year_income')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('mobile')->nullable(false);
            $table->rememberToken();
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
        Schema::dropIfExists('guardians');
    }
}
