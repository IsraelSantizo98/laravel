<?php

use Illuminate\Support\Facades\Route;
//especicar la ruta
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);
Route::get('cursos', [CursoController::class, "index"]);
//Tomar en cuenta la jerarquia de las url para evitar errores
Route::get('cursos/create', [CursoController::class, "create"]);
Route::get('cursos/{curso}', [CursoController::class, "show"]);
//Se puede pasar mas de una variable, al colocar el simbolo ? en la ultima variable dice que es opcional la variable que lo contenga 
/*
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    }
    else{
        return "Bienvenido al curso: $curso";
    }
});
*/