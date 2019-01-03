<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  	use AuthenticatesUsers;
  	/**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';


    /**
     * Shows the admin login form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showlogin(){
    	/*if(auth()->guard('employee')->check()){
    		return redirect()->route('dashboard');
    	}*/
    	return view('backend.admin.users.login');
    }
    public function login(Request $request){

    }
    public function logout(){

    }
}
