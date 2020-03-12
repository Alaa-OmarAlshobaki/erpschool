<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'firstName','middleName','lastName','Birthdate','employee_admission_no','employee_ID_number','Passport_number','Nationality','gender', 'email', 'password','phone','Mobile',
        'Soical_Status','Date_of_work','Work_start_date','avatar','salary','address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
