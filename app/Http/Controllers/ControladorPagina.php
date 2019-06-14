<?php

namespace App\Http\Controllers;

use App\Producto;

use Illuminate\Http\Request;

class ControladorPagina extends Controller
{
    public function inicio(){
        $lista_productos_mas = Producto::where('tipo', '=', 'masculino')->get();
        $lista_productos_fem = Producto::where('tipo', '=', 'femenino')->get();
        $titulo1 = "Femenino";
        $titulo2 = "Masculino";
        return view('inicio', compact('lista_productos_mas','lista_productos_fem'));
    }

    public function administrar(){
        return view('administrar');
    }

    public function prueba(){
        return view('prueba');
    }
}
 