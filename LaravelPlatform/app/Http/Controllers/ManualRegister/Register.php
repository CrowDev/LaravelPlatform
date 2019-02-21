<?php

namespace App\Http\Controllers\ManualRegister;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class Register extends Controller
{
    public function index(Request $request)
    {
    	return view('ManualRegister.register');
    }

    public function registerProcess(Request $request){
        
        
        $user = new User;

        $user->name = $request->input('firstName');
        $user->lastname = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/');

    }



}
