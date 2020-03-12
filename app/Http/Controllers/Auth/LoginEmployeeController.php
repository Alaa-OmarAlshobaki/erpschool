<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginEmployeeController extends Controller
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
       $this->middleware('guest:employee')->except('logout');
    }

    

    //login for employee
    public function showLoginEmployee(){
        return view('auth.login',['url'=>'employee']);
    }
    public function employeeLogin(Request $request){
      $this->validate($request,['email'=>'required|email',
                                'password'=>'required|min:6'
                                ]);
                                
    if(Auth::guard('employee')->attempt(['email'=>$request->email,
                                       'password'=>$request->password
                                       ])){
                                           return redirect()->intended('/employee');
                                       }


       return back()->withInput($request->only('email','remember'));

    }

}
