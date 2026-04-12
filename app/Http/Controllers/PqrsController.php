<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function index()
    {
        $mensajes = Pqrs::orderBy('id', 'desc')->get();
        return view('mensajes', compact('mensajes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres'          => 'required|string|max:100',
            'apellidos'        => 'required|string|max:100',
            'correo'           => 'required|email',
            'nacionalidad'     => 'nullable|in:Nacional,Extranjero',
            'tipo_documento'   => 'nullable|in:Cédula,Pasaporte,Visa',
            'numero_documento' => 'nullable|string|max:20',
            'tipo_pago'        => 'nullable|in:Efectivo,Tarjeta Crédito,Tarjeta Débito,Transferencia',
            'tipo'             => 'required|in:Queja,Petición,Felicitación',
            'mensaje'          => 'required|string',
            'acepto'           => 'accepted'
        ]);

        Pqrs::create([
            'nombres'          => $request->nombres,
            'apellidos'        => $request->apellidos,
            'correo'           => $request->correo,
            'nacionalidad'     => $request->nacionalidad,
            'tipo_documento'   => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'tipo_pago'        => $request->tipo_pago,
            'tipo'             => $request->tipo,
            'mensaje'          => $request->mensaje,
            'acepto'           => $request->has('acepto'),
        ]);

        return redirect()->route('mensajes')->with('success', '¡Mensaje enviado correctamente!');
    }
}