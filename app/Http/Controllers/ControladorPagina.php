<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPagina extends Controller
{
    public function inicio(){
        return view('inicio');
    }
}
