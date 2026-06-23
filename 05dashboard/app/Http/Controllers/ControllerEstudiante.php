<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEstudiante extends Controller
{
    public function metodoinicio()
    {
        return view('vistainicio');
    }

    public function metodocategorias()
    {
        return view('categoria.categoria_index');
    }

    public function metodoproductos()
    {
        return view('productos.productos_index');
    }
}
