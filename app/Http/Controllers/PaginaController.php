<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function menu()
    {
        return view('menu');
    }

    public function nosotros()
    {
        return view('reservas');
    }

    public function contacto()
    {
        return view('contactos');
    }
}

