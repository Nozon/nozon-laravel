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

Route::get('/admin', function () {
    return view('pages.administration');
});


Route::get('/login', 'AuthController@login');
Route::post('/auth/login', 'AuthController@check');
Route::post('checkAuth', 'AuthController@check');

Route::group(['middleware' => 'MyAuth'], function() {
    Route::get('/auth/logout', 'AuthController@logout');
    Route::get('/secure1', function () {
        return 'Je suis bien logué';
    });
    Route::get('/admin/{annee}', function ($annee) {
        Session::put('edition_annee', $annee);
        return ("Console d'administration pour l'annee ".$annee);
    });
});

Route::resource('accueil', 'AccueilController');
Route::resource('edition', 'EditionController');
Route::resource('equipe', 'EquipeController');
Route::resource('equipeSecondaire', 'EquipeController');
Route::resource('media', 'MediaController');
Route::resource('membre', 'MembreController');
Route::resource('niveau', 'NiveauController');
Route::resource('presse', 'PresseController');
Route::resource('profil', 'ProfilController');
Route::resource('publication', 'PublicationController');
Route::resource('recompense', 'RecompenseController');
Route::resource('user', 'UserController');
Route::resource('sponsor', 'SponsorController');
Route::resource('photo', 'MediaController');
Route::resource('video', 'MediaController');


Route::get('presse/edit/{id}', 'PresseController@edit');