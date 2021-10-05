<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use App\Vacante;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $ubicaciones = Ubicacion::all();
        $vacantes = Vacante::latest()->where("activa", true)->take(10)->get();
        return view("inicio.index", compact("vacantes", "ubicaciones"));
    }
}
