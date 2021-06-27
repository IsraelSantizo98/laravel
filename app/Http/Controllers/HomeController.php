<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Administra nuestras rutas y definir un metodo, se usa __invoke cuando solo es una ruta para administrar
    public function __invoke(){
        //return view('welcome');
        return view('home');
    }
}
