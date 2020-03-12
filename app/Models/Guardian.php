<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Authenticatable
{
    use Notifiable;

    protected $guard = 'employee';

    protected $fillable = [
        'fnameForFather','lnameForFather', 'fnameForMother', 'lnameForMother','email','password', 'city', 'state','street','ID_number_Father','ID_number_Mather','placeOfBirthMather'
        ,'placeOfBirthFather', 'birthdateForMa', 'birthdateForFa','fatherJob','motherJob', 'qualificationFather', 'qualificationMather','Average_monthly_income','Average_year_income','mobile','phone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ]; //
}
