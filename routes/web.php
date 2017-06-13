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
    return 'welcome';
});

Route::get('/login', 'AuthController@login');
Route::post('checkAuth', 'AuthController@check');

Route::group(['middleware' => 'MyAuth'], function() {
    Route::get('/auth/logout', 'AuthController@logout');
    Route::get('/admin/{annee}', function ($annee) {
        Session::put('edition_annee', $annee);
    });




});

Route::resource('presse', 'PresseController');
Route::resource('profil', 'ProfilController');
Route::resource('membre', 'MembreController');
