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

Route::resource('edition', 'EditionController');
Route::resource('equipe', 'EquipeController');
Route::resource('media', 'MediaController');
Route::resource('membre', 'MembreController');
Route::resource('niveau', 'NiveauController');
Route::resource('presse', 'PresseController');
Route::resource('profil', 'ProfilController');
Route::resource('publication', 'PublicationController');
Route::resource('recompense', 'RecompenseController');
Route::resource('sponsor', 'SponsorController');

