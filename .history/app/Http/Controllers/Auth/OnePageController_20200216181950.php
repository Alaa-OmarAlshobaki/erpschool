<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Classes;
use App\Models\Employee;
use App\Models\Institution;
use App\Models\Course;
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
        $dataOfInstitution=Institution::get();
        $data=ActivitySchool::with('classes')->latest()->get();
        $dataEmployee =Employee::with('Position')->get();
        $dataOfCourse=Course::get()->toArray();

        return view('welcome',compact('data','dataEmployee','dataOfInstitution','dataOfCourse'));
    }




}
