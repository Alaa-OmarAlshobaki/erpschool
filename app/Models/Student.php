<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
   
    use Notifiable;

    protected $guard = 'employee';

    protected $fillable = [
        'student_admission_no','student_admission_date','student_firstname','student_middlename','student_lastname', 'email', 'password','phone','gender','city','state','street','placeOfBirth','ID_number','statuse','avatar','guardians_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    #relaishon one to many revers
    public function guardians(){
        return $this->belongsTo('App\Models\Guardian');
    }


public function UpImage($image,$directory){
    $base_Path = "public/uploads/".$directory;
    $filename = md5(strtotime(date("Y-m-d H:i:s")).rand(1111,9999)). ".".$image->getClientOriginalExtension();
    $image->storePublicyAs($base_path,$filename);
    return "storge/uploads/".$directory . "/" . $filename;
}





}
