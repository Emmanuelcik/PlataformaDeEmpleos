<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes(["verify" => true]);
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

//VACANTES
Route::get("/vacantes", "vacanteController@index")->name("vacantes.index");
Route::get("/vacantes/create", "vacanteController@create")->name("vacantes.create");
Route::post("/vacantes", "vacanteController@store")->name("vacantes.store");

//Subir imagenes
Route::post('vacantes/imagen', "VacanteController@imagen")->name("vacantes.imagen");
Route::post('vacantes/borrarimagen', "VacanteController@borrarimagen")->name("vacantes.borrar");
