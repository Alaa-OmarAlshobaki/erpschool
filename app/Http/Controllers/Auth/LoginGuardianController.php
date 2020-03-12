<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginGuardianController extends Controller
{  use AuthenticatesUsers;
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
        $this->middleware('guest:guardian')->except('logout');
    }
    //login for guardian
    public function showLoginGuardian(){
        return view('auth.login',['url'=>'guardian']);
    }
    public function guardianLogin(Request $request){
        $this->validate($request,['email'=> 'required|email',
                                  'password'=>'required|min:6'
                                  ]);
    if(Auth::guard('guardian')->attempt(['email'=>$request->email,
                                        'password'=>$request->password])){
                                            return redirect()->intended('/guardian');
                                        }
        return back()->withInput($request->only('email','remember'));
    }

}
