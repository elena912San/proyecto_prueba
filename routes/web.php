<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */


/* 
Route::view() -> Atajo a vista estatica(No necesita buscar informacion de ningun dato)
Route::get() -> Construiremos una ruta de tipo get
Route::post('mi/ruta', ControladorDeLaRuta)
Route::put()
Route::delete()
Route::patch()
 */

 Route::view('/', 'landing.index')->name('index');
 Route::view('/about', 'landing.about')->name('about');

