<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeacherClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('classes_employees',function(Blueprint $table){
            $table->bigInteger('classes_id')->unsigned();
            $table->bigInteger('employees_id')->unsigned();
            $table->timestamps();
    
            $table->primary(['classes_id', 'employees_id']);
    
            $table->foreign('classes_id')->references('id')->on('classes');
            $table->foreign('employees_id')->references('id')->on('employees');
     
       
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
