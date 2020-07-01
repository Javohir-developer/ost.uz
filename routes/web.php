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


Route::get('/', function () {return view('site/index');});
Route::get('/elements', function () {return view('site/elements');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix'=>'admin'], function(){
        Route::resource('products','ProductsController')->middleware('auth');
        Route::get('products.show/{id}', 'ProductsController@show');
        Route::get('products.edit/{id}', 'ProductsController@edit');
    });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




