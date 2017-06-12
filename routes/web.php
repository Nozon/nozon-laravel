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


Route::get('/{annee}', 'EditionController@index')->where('annee', '[2-9][0-9]{1,3}');


Route::get('/', function () {
    return redirect('2017');
});


Route::get('/login', 'AuthController@login');
Route::post('/auth/login', 'AuthController@check');


Route::post('home', 'HomeController@index');

Route::group(['middleware' => 'MyAuth'], function() {
    Route::get('/auth/logout', 'AuthController@logout');
    Route::get('/secure1', function () {
        return 'Je suis bien logué';
    });

    Route::post('home', 'HomeController@index');


});

Route::resource('presse', 'PresseController');

Route::resource('recompense', 'RecompenseController');
