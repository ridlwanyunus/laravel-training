<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('rule:admin');
	}

    public function delete()
    {
    	return 'Ini halaman admin untuk melakukan DELETE';
    }

    public function update()
    {
    	return 'Ini halaman admin untuk melakukan UPDATE';
    }
}
