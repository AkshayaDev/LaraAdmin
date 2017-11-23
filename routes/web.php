<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

Route::get('/admin', 'AdminController@login');
Route::get('/admin/login', ['as' => 'AdminLogin', 'uses' => 'AdminController@login']);
Route::post('/admin/login', ['before' => 'csrf', 'as' => 'DoAdminLogin', 'uses' => 'Auth\LoginController@authenticate']);
Route::get('/admin/register', ['as' => 'AdminRegister', 'uses' => 'AdminController@register']);

Route::get('/page-not-found', function() {
	return view('admin.404');
});

Route::get('/internal-server-error', function() {
	return view('admin.500');
});

Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'AdminController@showDashboard'])->middleware('auth');
Route::get('/dashboard/logout', function () {
    // Only authenticated users may enter...
    Auth::logout();
    return redirect('admin/login');
})->middleware('auth');