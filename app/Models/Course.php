<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'Course_Name','description','code', 'Total_Working_Days'
    ];

}
