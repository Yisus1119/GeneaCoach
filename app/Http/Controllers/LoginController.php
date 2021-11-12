<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


    //metodos:
    //index para mostrar elementos
    //store para guardar una tarea
    //update para actualizar una tarea
    //destroy para eliminar una tarea
    //edit para que muestre un formulario para editar tareas


class LoginController extends Controller
{
    //El metodo encargado de mostrar el formulario se le pone create
    public function create(){
        return view('Login');
    }
}
