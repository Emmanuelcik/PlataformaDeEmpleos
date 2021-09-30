@extends('layouts.app')

@section('navegacion')

    @include("UI.adminnav")
@endsection

@section('content')
<h1 class="text-2xl text-center mt-10">Candidatos en {{$vacante->titulo}}</h1>

@endsection
