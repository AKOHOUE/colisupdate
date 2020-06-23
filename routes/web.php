<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'admin'], function() {
	//Users
	Route::get('make/register', 'AdminController@registerBack')->name('back.register');
	Route::post('make/register', 'AdminController@registerBackPost')->name('back.register.post');
	Route::get('logout', 'AdminController@logoutBack')->name('back.logout');
	Route::get('login', 'AdminController@loginBack')->name('back.login');
	Route::post('login', 'AdminController@loginBackPost')->name('back.login.post');
	Route::get('/', 'AdminController@home')->name('back.home');

	//Clients
	Route::group(['prefix' => 'clients'], function() {
		Route::get('/', 'AdminController@list')->name('back.clients.index');
	});


	//Suivis
	Route::group(['prefix' => 'suivis'], function() {
        Route::resource('/suivis', "SuiviController");
    });
});


//Route::resource('/admins', "AdminController");



// Front route
Route::get('/', 'FrontendController@index')->name('front.home');
Route::post('followInfoSaving', 'FrontendController@followInfoSave')->name('front.followInfoSave');
Route::get('follow_informations', 'FrontendController@followInfo')->name('front.followInfo');
Route::get('logout', 'AdminController@logoutFront')->name('front.logout');
Route::get('register', 'AdminController@registerFront')->name('front.register');
Route::post('register', 'AdminController@registerFrontPost')->name('front.register.post');
Route::get('login', 'AdminController@loginFront')->name('front.login');
Route::post('login', 'AdminController@loginFrontPost')->name('front.login.post');
Route::delete('delete/{id}', 'AdminController@deleteSuivi')->name('back.delete.suivi');
Route::get('edit/{id}', 'AdminController@editSuivi')->name('back.edit.suivi');
Route::post('update/{id}', 'AdminController@updateSuivi')->name('back.update.suivi');
Route::post('code_suivi', 'SuiviController@codeSuivi')->name('front.code.suivi');


Route::get('suivisform', 'FrontendController@suivisform')->name('front.suivisform');

/*app('debugbar')->disable();*/

