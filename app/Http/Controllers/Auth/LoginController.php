<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    function authenticate(Request $request) {
        $this->validate($request,array(
            'username' => 'required',
            'password' => 'required|min:6'
        ),array(
            'username.required' => 'Username is required.',
            'password.required' => 'Password is required.'
        ));

        if (Auth::attempt(['name' => $request['username'], 'password' => $request['password'], 'activated' => true])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
            return back()->withInput();
        }
    }
}
