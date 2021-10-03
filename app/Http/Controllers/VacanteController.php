<?php

namespace App\Http\Controllers;

use App\Salario;
use App\Vacante;
use App\Categoria;
use App\Ubicacion;
use App\Experiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacantes = Vacante::where("user_id", auth()->user()->id)->simplePaginate(3);
        return view("vacantes.index", compact("vacantes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $experiencias = Experiencia::all();
        $ubicaciones = Ubicacion::all();
        $salarios = Salario::all();
        return view("vacantes.create")
                    ->with("categorias", $categorias)
                    ->with("experiencias", $experiencias)
                    ->with("ubicaciones", $ubicaciones)
                    ->with("salarios", $salarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //Validacion
        $data = $request->validate([
            "titulo" => "required|min:8",
            "categoria" => "required",
            "experiencia" => "required",
            "ubicacion" => "required",
            "salario" => "required",
            "descripcion" => "required|min:20",
            "imagen" => "required",
            "skills" => "required",
        ]);
        //Alamacenar en la bd
        auth()->user()->vacantes()->create([
            "titulo" => $data["titulo"],
            "imagen" => $data["imagen"],
            "descripcion" => $data["descripcion"],
            "skills" => $data["skills"],
            "categoria_id" => $data["categoria"],
            "experiencia_id" => $data["experiencia"],
            "ubicacion_id" => $data["ubicacion"],
            "salario_id" => $data["salario"],
        ]);

        return redirect()->route("vacantes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {

        return view("vacantes.show")->with("vacante", $vacante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacante $vacante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacante $vacante)
    {
        //
    }

    public function imagen(Request $request)
    {
        $imagen = $request->file("file");
        $nombreImagen = time() . "." . $imagen->extension();
        $imagen->move(public_path("storage/vacantes"), $nombreImagen);
        return response()->json(["correcto" => $nombreImagen]);

    }
    //Borrar imagen via ajax
    public function borrarimagen(Request $request){
        if($request->ajax()){
            $imagen = $request->get("imagen");
            if(File::exists("storage/vacantes" . $imagen)){
                File::delete("storage/vacantes" . $imagen);
            }

            return response("Imagen Eliminada", 200);
        }
    }

    // Cambia el estado de una vacante
    public function estado(Request $request, Vacante $vacante) {
        //Leer nuevo estado y asignarlo
        $vacante->activa = $request->estado;
        //Guardarlo en la bd
        $vacante->save();
        return response()->json(["respuesta" => "Correcto"]);
    }
}
