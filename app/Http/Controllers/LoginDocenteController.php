<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginDocenteController extends Controller
{
    //El metodo encargado de mostrar el formulario se le pone create
    public function show(){
        return view('Docente');
    }
}
