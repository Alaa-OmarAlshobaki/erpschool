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
        // $class = ActivitySchool::where('classes_id')->get();
        // $class=ActivitySchool::find(1)->classes()->get();
        // $class=ActivitySchool::find('classes_id')->classes()->get();
        // $class=ActivitySchool::with('classes')->find(1);
        // $class=ActivitySchool::where('id', 1)->with('classes')->first();
        /////////////////////////////////////////////////
        // $class=ActivitySchool::find(1)->classes()->get();
        // $class=ActivitySchool::latest()->classes()->first();
        /////////////////////
        // $calss=ActivitySchool::with('classes')->lastest()->get();

      


        // $class=ActivitySchool::with('classes')->latest()->get();
        $class=ActivitySchool::with('classes')->latest()->get();

        $data=ActivitySchool::all()->toArray();
        return view('welcome',compact('data','class'));
    }
}
