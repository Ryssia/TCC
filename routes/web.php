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

Route::get('/', function () {
    return view('testehome');
})->middleware('auth')->name('home');

/*Route::get('/dashboard', function() {
    return view('testehome');
})->middleware(['auth'])->name('dashboard');*/

/*Route::get('/dashboard', function () {
    return view('ciclos.index');
})->middleware(['auth'])->name('dashboard');
*/

Route::resource('/ciclos', 'CicloController');
Route::get('/dicas', 'DicaController@index')->middleware('auth')->name('dicas.index');

/*Route::get('/dicas', function() {
    return view ('dicas.dicas');
})->name('dicas');*/

require __DIR__.'/auth.php';
