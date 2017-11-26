<?php
/**
* AdminController Class
*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

	function login() {
		if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('dashboard');
        }
		return view('admin.login');
	}

	function register() {
		if (Auth::check()) {
            // The user is logged in...
            return redirect()->route('dashboard');
        }
		return view('admin.register');
	}

	function showDashboard() {
		return view('admin.dashboard');
	}

}