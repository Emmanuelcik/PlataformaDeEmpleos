@foreach ($categorias as $categoria)
<a href="{{route("categorias.show", ["categoria" =>$categoria->id])}}"
class="text-white text-sm uppercase font-bold p-3"
    >
        {{$categoria->nombre}}
    </a>
@endforeach
