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

Auth::routes();

//kirgandan tug'ri shu shablonga kirishi uchum
Route::get('/', function () {return view('site/index');})->name('site.index');
Route::get('/web', function () {return view('site/web');})->name('site.web');
Route::get('/android', function () {return view('site/android');})->name('site.android');
Route::get('/vidyo', function () {return view('site/vidyo');})->name('site.vidyo');
Route::get('/video', function () {return view('site/video');})->name('site.video');
Route::get('/contact', function () {return view('site/contact');})->name('site.contact');
// tugadi

// lang uchun tillar
Route::get('/home', 'HomeController@index')->name('home');
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
//tugadi

//adminkaga kirish
Route::get('/home', 'HomeController@index')->name('home');
// tugadi

//admin product shablonlariga krish
Route::group(['prefix'=>'admin'], function(){
    Route::resource('products','ProductsController')->middleware('auth');
});
//tugadi

//admin android shablonlariga krish
Route::group(['prefix'=>'admin'], function(){
    Route::get('android',              'AndroidController@index')->middleware('auth');
    Route::get('android/index',        'AndroidController@index')->name('android.index')->middleware('auth');
    Route::get('android/create',       'AndroidController@create')->name('android.create');
    Route::post('android/store',       'AndroidController@store')->name('android.store');
    Route::get('android/edit/{id}',    'AndroidController@edit')->name('android.edit');
    Route::put('android/update/{id}',  'AndroidController@update')->name('android.update');
    Route::get('android/show/{id}',    'AndroidController@show')->name('android.show');
    Route::delete('android/destroy/{id}', 'AndroidController@destroy')->name('android.destroy');
});
//tugadi

//admin vdiyo shablonlariga krish
Route::group(['prefix'=>'admin'], function(){
    Route::get('vdiyo',              'VdiyoController@index')->middleware('auth');
    Route::get('vdiyo/index',        'VdiyoController@index')->name('vdiyo.index')->middleware('auth');
    Route::get('vdiyo/create',       'VdiyoController@create')->name('vdiyo.create');
    Route::post('vdiyo/store',       'VdiyoController@store')->name('vdiyo.store');
    Route::get('vdiyo/edit/{id}',    'VdiyoController@edit')->name('vdiyo.edit');
    Route::put('vdiyo/update/{id}',  'VdiyoController@update')->name('vdiyo.update');
    Route::get('vdiyo/show/{id}',    'VdiyoController@show')->name('vdiyo.show');
    Route::delete('vdiyo/destroy/{id}', 'VdiyoController@destroy')->name('vdiyo.destroy');
});
//tugadi

