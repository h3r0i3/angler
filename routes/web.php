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

/*Route::get('/', function () {
    return view('welcome');
});
*/

// wpisu do rountingu
Route::get('/', 'SitesController@index'); //na adres /sites wywoływana jest funkcja index z kontrolera SitesController
Route::get('/dodaj', 'SitesController@dodaj');
Route::get('/ranking', 'SitesController@ranking');
Route::get('/atlas', 'SitesController@atlas');
Route::get('/ochrona', 'SitesController@ochrona');
Route::get('/lowiska', 'SitesController@lowiska');
Route::get('/rejestracja', 'SitesController@rejestracja');
Route::get('/zaloguj', 'SitesController@zaloguj');
Route::post('/zapisz', [            // Zasób "zapis" będzie możliwy do uruchowmienia gdy będzie wywołany metodą POST.
    'uses' => 'SitesController@zapisz',
    'as' => 'sites.zapisz'  //skrócona nazwa routingu
]); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('ranking', 'PostsController');