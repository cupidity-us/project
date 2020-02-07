<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('index.register.index');
    }

    public function register()
    {
    	
    }
}
