<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginStudentController extends Controller
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
        $this->middleware('guest:student')->except('logout');
    }
    //login for student
    public function showLoginStudent(){
        return view('auth.login',['url'=>'student']);
    }
    public function studentLogin(Request $request){
        $this->validate($request,['email'=> 'required|email',
                                  'password'=>'required|min:6'
                                  ]);
    if(Auth::guard('student')->attempt(['email'=>$request->email,
                                        'password'=>$request->password,
                                     ])){
                                         return redirect()->intended('/student');
                                     }
    return back()->withInput($request->only('email','remember'));


    }
}
