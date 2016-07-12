<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest');
	}

    public function getLogin()
    {
    	return view('login.formLogin');
    }

    public function postLogin(Request $request)
    {
    	if(Auth::attempt([
    		'email' => $request->emailUsername,
    		'password' => $request->password
    		]))
    	{
    		return redirect('/');

    	}elseif(Auth::attempt([
    		'username' => $request->emailUsername,
    		'password' => $request->password
    		]))
    	{
    		return redirect('/');
    	}else {
    		return 'Salah memasukkan data';
    	}
    	
    }
}
