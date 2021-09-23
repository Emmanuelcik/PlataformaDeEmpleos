@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/basic.min.css" integrity="sha512-xBn/8sQ2hTyrml7BzlvvU3cF8MbXbfQTTxmQtm41Xr7BNrAULvZCJZQvRMbQB9H0A2SYMltfmXijXQi+gRRuSw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('navegacion')
    @include('UI.Adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>

    <form class="max-w-lg mx-auto my-10" action="{{route("vacantes.store")}}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo Vacante: </label>
            <input
                placeholder="Titulo de la vacante"
                type="text"
                name="titulo"
                class="p-3 bg-white-100 rounded form-input w-full @error('password') is-invalid @enderror"
                value="{{old("titulo")}}"
            >

            @error("titulo")
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6 " role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{$message}}</span>
                </div>
            @enderror
        </div>
        {{-- Experiencia --}}
        <div class="mb-5">
            <label for="experiencia" class="block text-gray-700 text-sm mb-2">Experiencia: </label>
            <select id="experiencia"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="experiencia"
            >
                <option disabled selected>--Seleccione--</option>
                @foreach ($experiencias as $experiencia)
                    <option
                        {{old("experiencia") == $experiencia->id ? "selected" : ""}}
                        value="{{$experiencia->id}}"
                        >
                        {{$experiencia->nombre}}
                    </option>
                @endforeach
            </select>

            @error("experiencia")
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6 " role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{$message}}</span>
                </div>
            @enderror
        </div>
        {{-- Categoria --}}
        <div class="mb-5">
            <label for="categoria" class="block text-gray-700 text-sm mb-2">Categoria: </label>
            <select id="categoria"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="categoria"
            >
                <option  value="" disabled selected>--Seleccione--</option>
                @foreach ($categorias as $categoria)
                    <option
                        {{old("categoria") == $categoria->id ? "selected" : ""}}
                        value="{{$categoria->id}}"
                    >
                        {{$categoria->nombre}}
                    </option>
                @endforeach
            </select>

            @error("categoria")
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6 " role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block">{{$message}}</span>
            </div>
            @enderror

        </div>
        {{-- Ubicacion --}}
        <div class="mb-5">
            <label for="ubicacion" class="block text-gray-700 text-sm mb-2">Ubicacion: </label>
            <select id="ubicacion"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="ubicacion"
            >
                <option value="" disabled selected>--Seleccione--</option>
                @foreach ($ubicaciones as $ubicacion)
                    <option
                        {{old("ubicacion") == $ubicacion->id ? "selected" : ""}}
                        value="{{$ubicacion->id}}"
                    >
                        {{$ubicacion->nombre}}
                    </option>
                @endforeach
            </select>

            @error("ubicacion")
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6 " role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block">{{$message}}</span>
            </div>
            @enderror
        </div>
        {{-- SALARIO --}}
        <div class="mb-5">
            <label for="salario" class="block text-gray-700 text-sm mb-2">Salario: </label>
            <select id="salario"
                class="block appearance-none border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full"
                name="salario"
            >
                <option  disabled selected>--Seleccione--</option>
                @foreach ($salarios as $salario)
                    <option
                        {{old("salario") == $salario->id ? "selected" : ""}}
                        value="{{$salario->id}}">
                        {{$salario->nombre}}
                    </option>
                @endforeach
            </select>

            @error("salario")
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6 " role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block">{{$message}}</span>
            </div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="descripcion"
            class="block text-gray-700 text-sm mb-2">Descripción del Puesto: </label>

            <div  class="editable p-3 bg-gray-100 rounded form-input w-full text-gray-700">

            </div>
            <input type="hidden" name="descripcion" value="{{old("descripcion")}}" id="descripcion">

            @error("descripcion")
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6 " role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block">{{$message}}</span>
            </div>
            @enderror

        </div>

        <div class="mb-5">
            <label for="habilidades"
            class="block text-gray-700 text-sm mb-2">Habilidades del Puesto: </label>

            @php
            $skills = ['HTML5', 'CSS3', 'CSSGrid', 'Flexbox', 'JavaScript', 'jQuery', 'Node', 'Angular', 'VueJS', 'ReactJS', 'React Hooks', 'Redux', 'Apollo', 'GraphQL', 'TypeScript', 'PHP', 'Laravel', 'Symfony', 'Python', 'Django', 'ORM', 'Sequelize', 'Mongoose', 'SQL', 'MVC', 'SASS', 'WordPress', 'Express', 'Deno', 'React Native', 'Flutter', 'MobX', 'C#', 'Ruby on Rails']
            @endphp
            <lista-skills :skills="{{json_encode($skills)}}"></lista-skills>
        </div>

        <div class="mb-5">
            <label for="dropzoneDevJobs"
            class="block text-gray-700 text-sm mb-2">Imagen de la vacante: </label>

            <div id="dropzoneDevJobs" class="dropzone rounded bg-gray-100">

            </div>
            <input type="hidden" name="imagen" id="imagen">
            <p id="alerta"></p>
        </div>

        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
            Publicar Vacante
        </button>
    </form>
@endsection

@section('scripts')
    {{-- editor de minum --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Drop Zone --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js" integrity="sha512-Mn7ASMLjh+iTYruSWoq2nhoLJ/xcaCbCzFs0ZrltJn7ksDBx+e7r5TS7Ce5WH02jDr0w5CmGgklFoP9pejfCNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        Dropzone.autoDiscover = false;
        document.addEventListener("DOMContentLoaded", () => {
            //MEDIUM EDITOR
            const editor = new MediumEditor(".editable", {
                toolbar: {
                    buttons: ["bold", "italic", "underline", "anchor", "justifyLeft", "justifyCenter", "justifyRight", "justifyFull", "orderList", "unorderList", "h2", "h3"],
                    static: true,
                    sticky: true,
                },
                placeholder: {
                    text: "Información de la vacante",
                }
            })
            //Agrega al input hidden lo que el usuario escribe en medium editor
            editor.subscribe("editableInput", function(eventObj, editable){
                const contenido = editor.getContent();
                document.querySelector("#descripcion").value = contenido;
            });

            //llena el editor con el contenido del input hidden
            editor.setContent(document.querySelector("#descripcion").value);

            //DROPZONE
            const dropzoneDevJobs = new Dropzone("#dropzoneDevJobs", {
                url: "/vacantes/imagen",
                dictDefaultMessage: 'Sube aquí tu archivo',
                acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp",
                addRemoveLinks: true,
                dictRemoveFile: 'Borrar Archivo',
                maxFiles: 1,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                success: function(file, response){
                    // console.log(response.correcto);
                    const alerta = document.querySelector("#alerta");
                    alert.textContent = "";
                    //Coloca la respuesta del servidor en el input hidden
                    document.querySelector("#imagen").value = response.correcto;
                    //Añadir al objeto de archivo el nombre del servidor
                    file.nombreServidor = response.correcto;
                },
                // error: function(file, response){
                //     const alerta = document.querySelector("#alerta");
                //     alerta.textContent = "Formato no valido";
                // },
                maxFilesexceeded: function(file){
                    if (this.files[1] != null ){
                        this.removeFile(this.files[0]);//elimina el anterior
                        this.addFile(file);//agrega el nuevo archivo
                    }
                },
                removedfile: function(file, response){
                    file.previewElement.parentNode.removeChild(file.previewElement)
                    params = {
                        imagen: file.nombreServidor
                    }
                    axios.post("/vacantes/borrarimagen", params)
                        .then(response => console.log(response))
                }
            });
        })
    </script>
@endsection
