<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Producto;

use Illuminate\Http\Request;

class ControladorPagina extends Controller
{
    public function inicio(){
        $lista_productos_mas = Producto::where('tipo', '=', 'masculino')->get();
        $lista_productos_fem = Producto::where('tipo', '=', 'femenino')->get();
        $lista_cliente = [
            'nombre_usuario' => '',
        ];
        //$lista

        return view('inicio', compact('lista_productos_mas','lista_productos_fem', 'lista_cliente'));
    }

    public function registrar(){
        $email = request('email');
        $nombre = request('nombre_usuario');
        $contraseña = request('password');

        Usuario::create([
            'email' => $email,
            'nombre_usuario' => $nombre,
            'password' => $contraseña,
        ]);

        $lista_productos_mas = Producto::where('tipo', '=', 'masculino')->get();
        $lista_productos_fem = Producto::where('tipo', '=', 'femenino')->get();

        $lista_cliente = [
            'email' => $email,
            'nombre_usuario' => $nombre,
            'password' => $contraseña,
        ];

        return view('inicio',  compact('lista_productos_mas','lista_productos_fem', 'lista_cliente'));
    }

    public function administrar(){
        return view('administrar');
    }

    public function prueba(){
        return view('prueba');
    }
}
 