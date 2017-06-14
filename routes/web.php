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
    return view('pages.edition');
});

Route::get('/admin', function () {
    return view('pages.administration');
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

Route::resource('equipe', 'EquipeController');

Route::resource('equipeSecondaire', 'EquipeController');

Route::resource('accueil', 'AccueilController');

Route::resource('user', 'UserController');

Route::resource('sponsor', 'SponsorController');

Route::resource('photo', 'MediaController');

Route::resource('video', 'MediaController');

Route::resource('prix', 'PrixController');

