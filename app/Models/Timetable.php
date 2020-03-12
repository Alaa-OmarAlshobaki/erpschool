<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable=['date','time','room','code','lead_teacher','classes_id'];
}
