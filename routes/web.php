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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


Route::group(['Middleware'=>'admin'],function (){

    Route::get('/admin',function (){

        return view('admin.index');
    });

    Route::resource('admin/users','AdminUsersController');
    Route::resource('admin/posts','AdminPostsController');
});


