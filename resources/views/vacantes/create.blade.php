@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('navegacion')
    @include('UI.Adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>

    <form class="max-w-lg mx-auto my-10" action="">
        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo Vacante: </label>
            <input type="text" name="titulo" class="p-3 bg-white-100 rounded form-input w-full @error('password') is-invalid @enderror">
        </div>
        {{-- Experiencia --}}
        <div class="mb-5">
            <label for="experiencia" class="block text-gray-700 text-sm mb-2">Experiencia: </label>
            <select name="" id="experiencia"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="experiencia">
                <option value="" disabled selected>--Seleccione--</option>
                @foreach ($experiencias as $experiencia)
                    <option value="{{$experiencia->id}}">
                        {{$experiencia->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
        {{-- Categoria --}}
        <div class="mb-5">
            <label for="categoria" class="block text-gray-700 text-sm mb-2">Categoria: </label>
            <select name="" id="categoria"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="categoria">
                <option value="" disabled selected>--Seleccione--</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">
                        {{$categoria->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
        {{-- Ubicacion --}}
        <div class="mb-5">
            <label for="ubicacion" class="block text-gray-700 text-sm mb-2">Ubicacion: </label>
            <select name="" id="ubicacion"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="ubicacion">
                <option value="" disabled selected>--Seleccione--</option>
                @foreach ($ubicaciones as $ubicacion)
                    <option value="{{$ubicacion->id}}">
                        {{$ubicacion->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
        {{-- SALARIO --}}
        <div class="mb-5">
            <label for="salario" class="block text-gray-700 text-sm mb-2">Salario: </label>
            <select name="" id="salario"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="salario">
                <option value="" disabled selected>--Seleccione--</option>
                @foreach ($salarios as $salario)
                    <option value="{{$salario->id}}">
                        {{$salario->nombre}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="salario"
            class="block text-gray-700 text-sm mb-2">Descripción del Puesto: </label>

            <div class="editable">

            </div>
        </div>

        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
            Publicar Vacante
        </button>
    </form>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const editor = new MediumEditor(".editable")
        })
    </script>
@endsection
