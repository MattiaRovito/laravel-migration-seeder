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


/**
 * Route Home
 */

Route::get('/', 'HomeController@home')->name('homepage');

Route::get('/chi-siamo', 'HomeController@noi')->name('sezione-chi-siamo');

Route::get('/contatti', 'HomeController@contatti' )->name('sezione-contatti');

Route::get('/social' , 'HomeController@social' )->name('sezione-social');




/**
 * Route Pacchetti
 */

Route::get('/pacchetti', function () {
    return view('pacchetti');
})->name('sezione-pacchetti');