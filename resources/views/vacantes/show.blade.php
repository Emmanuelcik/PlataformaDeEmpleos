@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-center mt-10">{{$vacante->titulo}}</h1>
    <div class="mt-10 mb-20 md:flex items-start">
        <div class="md:w-3/5">
            <p class="block text-gray-700 font-bold my-2">
                Publicado: <span class="font-normal"> {{$vacante->created_at->diffForHumans()}}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Categoria: <span class="font-normal"> {{$vacante->categoria->nombre}}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Salario: <span class="font-normal"> {{$vacante->salario->nombre}}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Ubicacado en: <span class="font-normal"> {{$vacante->ubicacion->nombre}}</span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
               Experiencia necesaria: <span class="font-normal"> {{$vacante->experiencia->nombre}}</span>
            </p>

            <h2 class="text-2xl text-center mt-10 mb-5 text-gray-700">Conocimientos y Teconologías</h2>
            @php
            $arraySkills = explode(",", $vacante->skills)
            @endphp

            @foreach ($arraySkills as $skill)
                <p class="inline-block py-2 border rounded border-gray-500 px-8 text-gray-700 font-bold my-2">
                     {{$skill}}
                </p>
            @endforeach

            <div class="descripcion mt-10 mb-5 ">
                {!! $vacante->descripcion !!}
            </div>

        </div>
        <div class="md:w-2/5">
            2
        </div>
    </div>
@endsection
