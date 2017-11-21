<?php
/**
* AdminController Class
*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AdminController extends Controller
{

	function login() {
		return view('admin.login');
	}

	function register() {
		return view('admin.register');
	}

}