@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="text-center py-5">
    <h1 class="fw-bold" style="color:#0d3b6e;">
        Bienvenido, {{ Auth::user()->name }} 👋
    </h1>
    <p class="text-muted fs-5">Has iniciado sesión correctamente en Hotel La Pradera.</p>

    <div class="row justify-content-center mt-4 g-3">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-4 text-center">
                <h1>📋</h1>
                <h6 class="fw-bold">Mensajes PQRS</h6>
                <p class="text-muted small">Ver todos los mensajes recibidos</p>
                <a href="{{ route('mensajes') }}" class="btn btn-primary btn-sm">Ver mensajes</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-4 text-center">
                <h1>🏨</h1>
                <h6 class="fw-bold">Hotel La Pradera</h6>
                <p class="text-muted small">Ir a la pagina principal</p>
                <a href="{{ route('inicio') }}" class="btn btn-outline-primary btn-sm">Ir al inicio</a>
            </div>
        </div>
    </div>
</div>

@endsection