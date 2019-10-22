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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.home');
// });

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index');
Route::get('/regional', 'PagesController@regional');
Route::get('/upt', 'PagesController@upt');
Route::get('/pusat', 'PagesController@pusat');
Route::get('/news', 'PagesController@news');
Route::get('/galeri', 'PagesController@galeri');
Route::get('/about', 'PagesController@about');
Route::get('/pelatihan', 'PagesController@pelatihan');
Route::get('/jadwal', 'PagesController@jadwal');
Route::get('/profile', 'PagesController@profile');

Route::get('/submission', 'TrainingController@create');
Route::get('/training/getdirektorat/{id}', 'TrainingController@getDivisi');
Route::get('/training/getdivisi/{id}', 'TrainingController@getBagian');
Route::post('/training', 'TrainingController@store');