<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Employee extends Authenticatable
{
    protected $guard = 'employee';

    protected $fillable = [
        'firstName','middleName','lastName','employee_admission_no','employee_ID_number','Passport_number','Nationality','Department_id','BirthDate','position_id','Profession_id','Date_of_work','Work_start_date','avatar','salary', 'email','phone','Mobile','SocialStatus_id' ,'password','gender','address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

public function Position(){
    return $this->belongsTo('App/')
}


}
