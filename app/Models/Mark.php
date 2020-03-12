<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $Fillable=['courses_id','first_exam','mark_of_first_exam','second_exam','mark_of_sec_exam','third_exam','mark_of_third_exam','final_exam','mark_of_final_exam','activity_Of_stu','mark_of_activity'];
}
