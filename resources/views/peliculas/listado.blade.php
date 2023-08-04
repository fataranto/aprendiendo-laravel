@include('includes.header')

<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>

<p>{{ date('Y') }}</p>

{{-- Comentario en Blade --}}

{{-- En versiones de Laravel anteriores a 5.4 se utilizaba 'or' en lugar de '??' --}}
{{ $director ?? 'No hay director' }}


{{-- Condicionales --}}
@if ($titulo && count($listado) >= 5)
    <h1>El titulo existe y es este: {{ $titulo }}</h1>
    <h2>El listado no esta vacio y es mayor a 5</h2>
@elseif ($titulo)
    <h1>El titulo existe y es este: {{ $titulo }}</h1>
@else
    <h1>El titulo no existe</h1>
@endif


{{-- Bucles --}}
@for ($i = 0; $i <= 20; $i++)
    El numero es: {{ $i }} <br>
@endfor

{{-- Foreach --}}
@foreach ($listado as $pelicula)
    <p>{{ $pelicula }}</p>
@endforeach

{{-- while --}}
<?php $contador = 1; ?>
@while ($contador < 50)
    @if ($contador % 2 == 0)
        {{ $contador }}<br>
    @endif
    <?php $contador++; ?>
@endwhile

@include('includes.footer')





