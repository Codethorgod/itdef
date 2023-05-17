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


	Route::get('/', "HomeController@index");
	Route::get('/about', "HomeController@about");
	Route::get('/articles', "HomeController@articles");
	Route::get('/Q&A', "HomeController@ques");
	Route::get('/dictionary', "HomeController@dictionary");
	Route::get('register', 'Auth\RegisterController@showRegister');
	Route::post('register', 'Auth\RegisterController@register')->name('register');


 //login
	Route::get('login', 'Auth\LoginController@showLoginForm');
	Route::post('login', 'Auth\LoginController@login')->name('login'); 




	Route::match(['get','post'],'/change-password', 'Admin\AdminController@changePassword')->name('changepassword');
 
	Route::group(['prefix'=>'admin','as'=>'admin','middleware'=>['auth','checkadmin'],'as'=>'admin.'],function() {
		
		Route::match(['get','post'],'/logout','Auth\LoginController@logout')->name('logout');
		Route::match(['get','post'],'/dashboard', 'Admin\DashboardController@index');
 
		
	});


	Route::match(['get','post'],'/logout','Auth\LoginController@logout')->name('logout');
