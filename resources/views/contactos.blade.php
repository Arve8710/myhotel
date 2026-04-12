@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<style>
    .hero-contacto {
        background: linear-gradient(135deg, #0d3b6e 0%, #1565c0 100%);
        color: white;
        padding: 50px 20px;
        border-radius: 15px;
        margin-bottom: 40px;
        text-align: center;
    }
    .seccion-fondo {
        background: linear-gradient(135deg, #e8f4fd, #f0f7ff);
        border-radius: 15px;
        padding: 35px;
        margin-bottom: 30px;
    }
    .card-info {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .card-info:hover {
        transform: translateY(-5px);
    }
    .icono-grande {
        font-size: 2.5rem;
    }
</style>

{{-- HERO --}}
<div class="hero-contacto">
    <h2 class="fw-bold">📬 Contáctanos</h2>
    <p class="lead mb-0">Estamos disponibles para atenderte las 24 horas del día</p>
</div>

{{-- INFORMACIÓN DE CONTACTO --}}
<div class="seccion-fondo mb-5">
    <h4 class="fw-bold mb-4 text-center" style="color:#0d3b6e;">📍 Información de Contacto</h4>
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card card-info text-center p-4 h-100">
                <div class="icono-grande mb-2">📍</div>
                <h6 class="fw-bold">Dirección</h6>
                <p class="text-muted small mb-0">Calle 10 # 25-30<br>Pasto, Nariño<br>Colombia</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-info text-center p-4 h-100">
                <div class="icono-grande mb-2">📞</div>
                <h6 class="fw-bold">Teléfono</h6>
                <p class="text-muted small mb-0">+57 (2) 123 4567<br>+57 310 987 6543<br>Lunes a Domingo</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-info text-center p-4 h-100">
                <div class="icono-grande mb-2">✉️</div>
                <h6 class="fw-bold">Correo</h6>
                <p class="text-muted small mb-0">info@hotelpradera.com<br>reservas@hotelpradera.com</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-info text-center p-4 h-100">
                <div class="icono-grande mb-2">🕐</div>
                <h6 class="fw-bold">Horario</h6>
                <p class="text-muted small mb-0">Recepción 24/7<br>Restaurante: 6am - 10pm<br>Bar: hasta 2am</p>
            </div>
        </div>

    </div>
</div>


{{-- REDES SOCIALES --}}
<div class="text-center p-4 rounded mb-4"
     style="background: linear-gradient(135deg, #0d3b6e, #1565c0); color:white;">
    <h5 class="fw-bold mb-3">🌐 Síguenos en Redes Sociales</h5>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="#" class="btn btn-light fw-bold px-4">📘 Facebook</a>
        <a href="#" class="btn btn-light fw-bold px-4">📸 Instagram</a>
        <a href="#" class="btn btn-light fw-bold px-4">🐦 Twitter</a>
        <a href="#" class="btn btn-light fw-bold px-4">▶️ YouTube</a>
    </div>
</div>

@endsection