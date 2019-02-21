<?php

namespace App\Http\Controllers\ManualLogin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

#To use login
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index(Request $request)
    {
    	return view('ManualLogin.login');
    }

    public function loginProcess(Request $request)
    {

    	$user = $request->input('email');
    	$password = $request->input('password');

    	$data = array(
    		'email'	=> $user,
    		'password' => $password,
    	);

    	if(Auth::attempt($data, true))
    	{
            
    		return redirect('/admin');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
