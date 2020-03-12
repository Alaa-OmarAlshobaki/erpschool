<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class loginTeacherController extends Controller
{
   
    use AuthenticatesUsers;
/**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(){
       $this->middleware('guest:teacher')->except('logout');
    }

    

    //login for teacher
    public function showLoginTeacher(){
        return view('auth.login',['url'=>'teacher']);
    }
    public function teacherLogin(Request $request){
      $this->validate($request,['email'=>'required|email',
                                'password'=>'required|min:6'
                                ]);
                                
    if(Auth::guard('teacher')->attempt(['email'=>$request->email,
                                       'password'=>$request->password
                                       ])){
                                           return redirect()->intended('/teacher');
                                       }


       return back()->withInput($request->only('email','remember'));

    }





}
