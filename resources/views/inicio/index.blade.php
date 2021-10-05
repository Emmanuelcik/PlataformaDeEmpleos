@extends('layouts.app')

@section('navegacion')

@section('content')
    <div class="flex flex-col shadow bg-white lg:flex-row">
        <div class="lg:w-1/2 px-8 lg:px-12 py-12 lg:py-24">
            <p class="text-2

            dixl text-gray-700 ">
                dev<span class="font-bold">Jobs</span>
            </p>
            <h1 class="mt-2 sm:mt-4 text-2xl font-bold text-gray-700 leading-tight">
                Ecuentra trabajo remoto o en tu país
                <span class="text-teal-500 block">Para Desarrolladores / Diseñadores Web</span>
            </h1>
        </div>

        <div class="block lg:w-1/2">
            <img class="inset-0 h-full w-full object-cover" src="img/feliz.jpg" alt="DevJobs imagen">
        </div>
    </div>

    {{-- Mostrar las ultimas vacantes activas --}}

    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-2xl text-gray-700 m-0">
            Nuevas
            <span class="font-bold">Vacantes</span>
        </h1>

        <ul class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($vacantes as $vacante)
                <li>
                    {{$vacante->titulo}}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
