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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

//------- INSTALLER / RÉINITIALISER BASE DE DONNÉES

Route::get('/installer', 'AppController@installer');


//------- ROUTES USER

Route::view('/', 'interfaceUser.accueil')->name('accueilUser');
Route::view('/accueil', 'interfaceUser.accueil')->name('accueilUser');

Route::get('/vinyles', "VinyleController@index");
Route::get('/vinyles/{vinyle}', "VinyleController@show")->where('vinyle', '[0-9]+');


//------- ROUTES ADMIN

Route::view('/gestion', 'interfaceAdmin.accueil')->name('accueilAdmin');
Route::view('/gestion/connexion', 'interfaceAdmin.connexion')->name('connexionAdmin');

Route::get('/gestion/articles', "VinyleController@indexAdmin");
Route::get('/gestion/articles/{vinyle}', "VinyleController@showAdmin")->where('vinyle', '[0-9]+');

Route::get('/gestion/articles/ajouter', "VinyleController@create");
Route::post('/gestion/articles/ajouter', "VinyleController@store");

Route::get('/gestion/{vinyle}/modifier', "VinyleController@edit")->where('vinyle', '[0-9]+');
Route::post('/gestion/{vinyle}/modifier', "VinyleController@update")->where('vinyle', '[0-9]+');
Route::get('/gestion/{vinyle}/effacer', "VinyleController@destroy")->where('vinyle', '[0-9]+');