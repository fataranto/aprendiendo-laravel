<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;  // Importamos el controlador (NO SE UTILIZA EN EL CURSO)

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo "<h1>Hello World</h1>";
});

//Route::get('/peliculas', ['PeliculaController@index']); //ESTE MÉTODO NO FUNCIONA
//Route::get('/peliculas', 'App\Http\Controllers\PeliculaController@index'); //si utilizo esta forma, NO necesito importar el controlador
Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index']); //si utilizo esta forma, SI necesito importar el controlador

Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'App\Http\Controllers\PeliculaController@detalle'
]);

//Route::resource('/usuario', 'App\Http\Controllers\UsuarioController');

Route::get('/redirigir', [PeliculaController::class, 'redirigir']);

/*
GET: CONSEGUIR DATOS
POST: GUARDAR DATOS
PUT: ACTUALIZAR RECURSOS
DELETE: ELIMINAR RECURSOS

*/

/*
Route::get('/mostrar-fecha', function () {
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});


//Route pelicula
Route::get('/pelicula/{titulo?}/{year?}', function ($titulo = 'No hay una pelicula seleccionada', $year = 2019) {
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})  ->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

//Route listado de peliculas
Route::get('/listado-peliculas', function () {
    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'Spiderman', 'Gran Torino');
    return view('peliculas.listado')
        ->with('titulo', $titulo)
        ->with('listado', $listado);
});

//Route pagina
Route::get('/pagina-generica', function () {
    return view('pagina');
});

*/