<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Réinstaller base de données
Route::get('/installer', 'AppController@installer');


// Routes User
Route::get('/', function () {
    return view('interfaceUser.accueil');
})->name('accueilUser');

Route::get('/accueil', function () {
    return view('interfaceUser.accueil');
})->name('accueilUser');

Route::get('/vinyles', "VinyleController@index")->name('vinylesUser');
Route::get('/vinyles/{vinyle}', "VinyleController@show")->name('detailsUser');


// Routes Admin
Route::get('/admin', function () {
    return view('interfaceUser.accueil')->name('accueilAdmin');
});
