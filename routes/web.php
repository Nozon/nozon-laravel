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



Route::get('/login', 'AuthController@login');
Route::post('checkAuth', 'AuthController@check');

Route::group(['middleware' => 'MyAuth'], function() {
    Route::get('/auth/logout', 'AuthController@logout');
    Route::get('/admin/{annee}', function ($annee) {
        Session::put('edition_annee', $annee);
    });

    Route::get('/admin', function () {
        return view('pages.administration');
    });
});

Route::resource('membre', 'MembreController');
Route::resource('presse', 'PresseController');
Route::resource('profil', 'ProfilController');
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
Route::resource('compte', 'AuthController');
