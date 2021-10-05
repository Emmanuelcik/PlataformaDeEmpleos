@extends('layouts.app')

@section('navegacion')
    @include("UI.CategoriasNav")
@endsection

@section('content')


    {{-- Mostrar las ultimas vacantes activas --}}
    @if (count($vacantes) > 0)

    <h1 class="text-2xl text-gray-700 mt-5">
        Resultados de la búsqueda:
    </h1>
    <div class="my-10 bg-gray-100 p-10 shadow">
        @include("UI.listado")
    </div>
    @else
        <p class="text-center text-gray-700 ">No hay vacantes que conquerden con tu búsqueda</p>
    @endif

@endsection
