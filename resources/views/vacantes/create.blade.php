@extends('layouts.app')

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

        <div class="mb-5">
            <label for="experiencia" class="block text-gray-700 text-sm mb-2">Categoría: </label>
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

        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
            Publicar Vacante
        </button>
    </form>
@endsection
