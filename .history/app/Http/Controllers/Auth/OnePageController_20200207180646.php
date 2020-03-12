<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Classes;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\ActivitySchool;
use App\Http\Controllers\Controller;

class OnePageController extends Controller
{

    public function __construct(){
    //
    
    }



    
    //function for return all activity in school
    public function OurActivity(){
     
        $data=ActivitySchool::with('classes')->latest()->get();
        return view('welcome',compact('data'));
    }

  public function OurTeachers(){
      $dataEmployee = Employee::all()->get();
      return vw('welcome',compact('dataEmployee'));

  }


}
