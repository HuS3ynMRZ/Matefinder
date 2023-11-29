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

Route::get('register','AuthController@registerform')->name('registerform');
Route::post('register','AuthController@register')->name('register');

Route::get('login','AuthController@loginform')->name('loginform');
Route::post('login','AuthController@login')->name('login');
Route::get('verified_user/{id}','AuthController@verified_user')->name('verified_user');

Route::get('logout','AuthController@logout')->name('logout');

Route::get('/','HomeController@index')->name('home');
Route::get('/chat/{id}','HomeController@chat')->name('chat');
Route::post('/sendMsg','HomeController@sendMsg')->name('sendMsg');
Route::get('/get-message','HomeController@get_user_messages')->name('get-message');
Route::get('/get-messages','HomeController@get_user_messagess')->name('get-messages');
Route::get('rating','HomeController@rating')->name('rating');

Route::get('admin/login','AuthController@adminloginform')->name('adminloginform');
Route::post('admin/login','AuthController@adminlogin')->name('adminlogin');
//redirect_if_not_authenticated
// Admin
Route::group( [ "middleware" => [ "auth" ], "as" => "admin.", "prefix" => "admin", "namespace" => "Admin" ] , function () {
    //dashboard
    Route::get('/dashboard','AdminController@index')->name('dashboard');

    Route::get('logout','AdminController@logout')->name('logout');

    // Categories
    Route::GET( "games", "CategoryController@index" )->name( "categories.index" );
    Route::GET( "games/create", "CategoryController@create" )->name( "categories.create" );
    Route::POST( "games", "CategoryController@store" )->name( "categories.store" );
    Route::GET( "games/{category}/edit", "CategoryController@edit" )->name( "categories.edit" );
    Route::PATCH( "games/{id}", "CategoryController@update" )->name( "categories.update" );
    Route::DELETE( "games/{category}", "CategoryController@destroy" )->name( "categories.destroy" );
} );
