<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Al adminstrar mas de una ruta se crean 3 metodos
    //Por convecion se llama index al home de la ruta
    public function index(){
        return view('curso.index');
    }
    //Por convecion se llama create al formulario de usuario nuevo etc
    public function create(){
        return view('curso.create');
    }
    //Por convecion se llama show a un elemento en particular
    public function show($curso){
        //Pasar la variable que usa el mismo nombre usar compact si no crear el return de la forma final
        return view('curso.show', compact('curso'));
        //return view('curso.show', ['curso' => $curso]);
    }
}
