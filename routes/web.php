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

Route::get('/page-not-found', [
	'as' => 'not-found',
	'uses' => function() {
				return view('admin.404');
				}
]);

Route::get('/internal-server-error', [
	'as' => 'server-error',
	'uses' => function() {
				return view('admin.500');
				}
]);

Route::prefix('admin')->group(function(){

	Route::get('login', ['as' => 'login', 'uses' => 'AdminController@login']);
	Route::post('login', ['before' => 'csrf', 'as' => 'DoAdminLogin', 'uses' => 'Auth\LoginController@authenticate']);
	Route::get('register', ['as' => 'AdminRegister', 'uses' => 'AdminController@register']);

	Route::get('dashboard', ['as'=>'dashboard', 'uses'=>'AdminController@showDashboard'])->middleware(['auth','web']);
	Route::get('logout', function() {
		Auth::logout();
		return redirect()->route('login');
	})->middleware(['web','auth']);

});

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
	Route::resource('permissions','PermissionController');
});