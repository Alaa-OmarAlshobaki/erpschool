<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivitySchool extends Model
{
   protected $fillable=['title','description','avatar','classes_id','teacher_id'];

public function classes(){
    return $this->hasmany('App\Models\Classes');
}


}
