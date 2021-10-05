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


//Grupo con rutas que comparten un middleware
//VACANTES
Route::group(["middleware" =>["auth", "verified"] ] ,function (){
    Route::get("/vacantes", "vacanteController@index")->name("vacantes.index");
    Route::get("/vacantes/create", "vacanteController@create")->name("vacantes.create");
    Route::post("/vacantes", "vacanteController@store")->name("vacantes.store");
    Route::delete("/vacantes/{vacante}", "vacanteController@destroy")->name("vacantes.destroy");
    Route::get("/vacantes/{vacante}/edit", "vacanteController@edit")->name("vacantes.edit");
    Route::put("/vacantes/{vacante}", "vacanteController@update")->name("vacantes.update");

    //Subir imagenes
    Route::post('vacantes/imagen', "VacanteController@imagen")->name("vacantes.imagen");
    Route::post('vacantes/borrarimagen', "VacanteController@borrarimagen")->name("vacantes.borrar");

    //Cambiar estado de la vacante
    Route::post("/vacantes/{vacante}", "VacanteController@estado")->name("vacantes.estado");

    Route::get('/notificaciones', "NotificacionesController")->name("notificaciones");
});

//PAGINA DE INCIO
Route::get("/", "InicioController")->name("inicio");
//Enviar datos para una vacante
Route::get("/candidatos/{id}", "CandidatoController@index")->name("candidatos.index");
Route::post("/candidatos/store", "CandidatoController@store")->name("candidatos.store");

//Muestra lso trabajos en el frontend pero sin autenticacion
Route::get("/vacantes/{vacante}", "vacanteController@show")->name("vacantes.show");


