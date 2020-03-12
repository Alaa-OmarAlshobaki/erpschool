<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $Fillable=['courses_id','date','time','name_of_exam','Max_of_mark','Min_of_mark'];
}
