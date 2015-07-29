<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::get('/halo', function()
// {
// 	return "Halo Fahmi, Semangat Ya PKL Di Javan Cipta Solusinya :D";
// });

// Route::get('/halo-juga', 'SiteController@haloJuga');


// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::get('Kindeuw/create', 'KindeuwController@create');
Route::get('Kindeuw', 'KindeuwController@index');
Route::post('Kindeuw', 'KindeuwController@store');
Route::get('Kindeuw/{id}', 'KindeuwController@baca');
Route::delete('Kindeuw/hapus/{id}',array(
	'uses' => 'KindeuwController@hapus', 'as' => 'Kindeuw'));
Route::get('Kindeuw/ubah/{id}', 'KindeuwController@edit');
Route::put('Kindeuw/ubah/lagi/{id}',array(
        'uses' => 'KindeuwController@ubah', 'as' => 'Kindeuw'));
Route::get('Kindeuw/About/About', 'KindeuwController@about');
Route::get('Kindeuw/Contact/Contact', 'KindeuwController@kontak');
Route::post('Kindeuw/search/search/search', 'KindeuwController@cari');
Route::get('Kindeuw/pdf/pdf/{id}', 'KindeuwController@pdf');
Route::get('Kindeuw/excel/excel', 'KindeuwController@excel');
Route::get('Kindeuw/admin/admin', 'KindeuwController@admin');
Route::get('Kindeuw/index/index', 'CustomLoginController@getlogin');
Route::post('Kindeuw/index/index', 'CustomLoginController@postlogin');
Route::get('Kindeuw/daftar/akun', 'KindeuwController@daftar');
Route::post('Kindeuw/daftar/akun/cek', 'KindeuwController@regis');
Route::get('Kindeuw/index/index/logout', 'CustomLoginController@logout');