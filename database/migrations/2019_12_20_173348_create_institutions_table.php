<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Institution_Name')->unique()->nullable(false);
            $table->string('Institution_Address')->nullable(false);
            $table->string('Institution_Email')->unique();
            $table->string('Institution_Phone')->unique()->nullable(false);
            $table->string('Institution_Mobile')->unique()->nullable(false);
            $table->string('Institution_Fax')->unique()->nullable(false);
            $table->unsignedBigInteger('admin_id');
            $table->string('Country')->nullable(false);
            $table->string('Currency_Type')->nullable(false);
            $table->string('language')->nullable(false);
            $table->smallInteger('code',false,true)->default(0);
            $table->string('Institution_Code')->nullable(false);
            $table->string('logo')->nullable(false);
            $table->string('Timezone');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins');

        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
