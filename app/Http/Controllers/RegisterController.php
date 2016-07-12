<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\User;

use DB;


class RegisterController extends Controller
{

    public function getRegister()
    {
    	return view('register.formRegister');
    }

    public function postRegister(Request $request)
    {
    	$user = new User();

    	$user->username = Input::get('username');

    	$user->name = Input::get('name');

    	$user->email = Input::get('email');

    	$user->password = bcrypt(Input::get('password'));

    	$user->roles_id = DB::table('roles')->select('id')->where('namaRule', 'user')->first()->id;

    	//dd($user);
    	$user->save();
    }
}
