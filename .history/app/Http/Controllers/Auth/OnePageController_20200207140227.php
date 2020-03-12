<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Classes;
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
     
        $class=ActivitySchool::with('classes')->latest()->get();
        return($class['class']);

        $data=ActivitySchool::all()->toArray();
        return view('welcome',compact('data','class'));
    }
}
