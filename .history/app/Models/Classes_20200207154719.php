<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $Fillable=['class','branch','student_id','academics_id'];

    public function ActivitySchool(){
        return $this->belongsTo('App\Modls\ActivitySchool');
    
    }






}


