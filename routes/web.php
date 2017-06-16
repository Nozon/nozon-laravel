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

Route::get('/{annee}', 'EditionController@indexPublic')->where('annee', '[2-9][0-9]{1,3}');

Route::get('/', function () {
    return redirect('2017');
});

Route::get('/login', 'AuthController@login');
Route::post('/auth/login', 'AuthController@check');
Route::post('checkAuth', 'AuthController@check');


// Tout ce qui passe par ce middleware n'est accessible qu'aux personnes authentifiées
Route::group(['middleware' => 'MyAuth'], function() {
    Route::get('/auth/logout', 'AuthController@logout');
    Route::get('/secure1', function () {
        return 'Je suis bien logué';
    });

    Route::get('/admin', function () {
        $annee = Session::get('edition_annee');
        return redirect('admin/'.$annee);
    });

    Route::get('/admin/{annee}', function ($annee) {
        Session::put('edition_annee', $annee);
        return redirect('admin/'.$annee.'/accueil');
    });

    Route::resource('/admin/{annee}/accueil', 'AccueilController');

    Route::resource('/admin/{annee}/edition', 'EditionController');


    Route::resource('/admin/{annee}/equipe', 'EquipeController');
    Route::resource('/admin/{annee}/equipeSecondaire', 'EquipeController');
    Route::resource('/admin/{annee}/media', 'MediaController');
    Route::resource('/admin/{annee}/membre', 'MembreController');
    Route::resource('/admin/{annee}/niveau', 'NiveauController');
    Route::resource('/admin/{annee}/presse', 'PresseController');

    Route::get('/admin/{annee}/presse/edit/{id}', 'PresseController@edit');

    Route::resource('/admin/{annee}/profil', 'ProfilController');
    Route::resource('/admin/{annee}/news', 'PublicationController');
    Route::resource('/admin/{annee}/prix', 'RecompenseController');
    Route::resource('/admin/{annee}/user', 'UserController');
    Route::resource('/admin/{annee}/sponsor', 'SponsorController');
    Route::resource('/admin/{annee}/devenirSponsor', 'DevenirSponsorController');
    Route::resource('/admin/{annee}/compte', 'CompteController');

    Route::resource('/admin/{annee}/photo', 'MediaController');
    Route::resource('/admin/{annee}/video', 'MediaController');
});
