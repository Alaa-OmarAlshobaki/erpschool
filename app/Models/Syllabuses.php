<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syllabuses extends Model
{
    protected $fillable=['Syllabus_Name','courses_id','date','topic','due_on_this_date','description'];
}
