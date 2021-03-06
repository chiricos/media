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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getLogin'])->middleware('guest');
Route::post('/', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin'])->middleware('guest');
Route::get('inicio', ['as' => 'inicio', 'uses' => 'HomeController@inicio']);
Route::get('registrarse', ['as' => 'register', 'uses' => 'HomeController@createUser'])->middleware('guest');
Route::post('registrarse', ['as' => 'back.user.store', 'uses' => 'HomeController@store'])->middleware('guest');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::group(['middleware'=>'auth'],function(){

    Route::resource('product','ProductController');
    Route::get('product/{id}/destroy',[
        'uses'  =>  'ProductController@destroy',
        'as'    =>  'product.destroy'
    ]);

    Route::get('search', ['as' => 'search', 'uses' => 'ProductController@getSearch']);
    Route::post('search', ['as' => 'search', 'uses' => 'ProductController@search']);

});
