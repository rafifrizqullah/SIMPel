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

Route::get('/', 'PagesController@home');
Route::get('/info-pelatihan', 'TrainingController@index');
Route::get('/about', 'PagesController@about');

Route::get('registrasi', 'RegistrasiController@index');
Route::get('registrasi/getdirektorat/{id}', 'RegistrasiController@getDivisi');
Route::get('registrasi/getdivisi/{id}', 'RegistrasiController@getBagian');
Route::post('registrasi/store', 'RegistrasiController@store');