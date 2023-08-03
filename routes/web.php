<?php

use Illuminate\Support\Facades\Route;

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


/*
GET: CONSEGUIR DATOS
POST: GUARDAR DATOS
PUT: ACTUALIZAR RECURSOS
DELETE: ELIMINAR RECURSOS

*/

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