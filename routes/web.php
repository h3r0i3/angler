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
Route::get('/atlas', 'AtlasController@create');
Route::get('/ochrona', 'SitesController@ochrona');
Route::get('/lowiska', 'SitesController@lowiska');
Route::post('/zapisz', [            // Zasób "zapis" będzie możliwy do uruchowmienia gdy będzie wywołany metodą POST.
    'uses' => 'SitesController@zapisz',
    'as' => 'sites.zapisz'  //skrócona nazwa routingu
]); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resources([
    'ranking' => 'PostsController',
    'wedki' => 'FishingRodController',
    'kolowrotki' => 'ReelsController',
    'zylki' => 'LinesController',
    'haczyki' => 'HooksController',
    'przypony' => 'LeadersController',
    'zestawy' => 'SetsController',
    'atlas' => 'AtlasController'
]);
