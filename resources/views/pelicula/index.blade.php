<h1>{{$titulo}}</h1>
<P>(Acción index del controlador)</P>

@if(isset($pagina))
    <h3>La página es {{$pagina}}</h3>
@endif

<a href="{{ action('App\Http\Controllers\PeliculaController@detalle') }}">Ir al detalle</a>