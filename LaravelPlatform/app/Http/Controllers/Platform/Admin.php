<?php

namespace App\Http\Controllers\Platform;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(Request $request)
    {
    	return view('Platform.admin');
    }

}
