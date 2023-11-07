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

Route::get('/', 'CicloController@dashboard')->middleware('auth')->name('home');

/*Route::get('/dashboard', function() {
    return view('testehome');
})->middleware(['auth'])->name('dashboard');*/

/*Route::get('/dashboard', function () {
    return view('ciclos.index');
})->middleware(['auth'])->name('dashboard');
*/

Route::resource('/ciclos', 'CicloController')->middleware('auth');
Route::get('/dicas', 'DicaController@index')->middleware('auth')->name('dicas.index');
Route::get('/ciclo/{flag}', 'CicloController@list')->middleware('auth')->name('ciclo.list');

Route::get('/dicasteste', function() {
    return view ('dicas.card');
})->name('dicas');

require __DIR__.'/auth.php';
