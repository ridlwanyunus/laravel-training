<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('login.formLogin');
    }
}
