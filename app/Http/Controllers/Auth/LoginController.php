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
    protected $redirectTo = '/admin/dashboard';

    function authenticate(Request $request) {
        $this->validate($request,array(
            'email' => 'required|email',
            'password' => 'required|min:6'
        ),array(
            'email.required' => 'Email is required.',
            'password.required' => 'Password is required.'
        ));

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'activated' => true],$request['remember'])) {
            // Authentication passed...
            return redirect()->route('dashboard')->with('status','Successfully logged in.');
        }else{
            return back()->withInput()->withErrors(['password'=>'Wrong email/password combination.']);
        }
    }
}