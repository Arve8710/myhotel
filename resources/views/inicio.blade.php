@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

<style>
    .hero-title {
        font-family: 'Playfair Display', serif;
        color: #0d3b6e;
        font-size: 2.5rem;
        font-weight: bold;
    }
    .seccion-fondo {
        background: linear-gradient(135deg, #e8f4fd, #f0f7ff);
        border-radius: 15px;
        padding: 35px;
        margin-bottom: 30px;
    }
    .card-servicio {
        border: none;
        border-radius: 12px;
        transition: transform 0.3s;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .card-servicio:hover {
        transform: translateY(-5px);
    }
    .carousel-item img {
        height: 450px;
        object-fit: cover;
        border-radius: 12px;
    }
</style>

{{-- TÍTULO --}}
<div class="text-center mb-4">
    <h1 class="hero-title">Bienvenidos a una sensación de confort</h1>
    <p class="text-muted fs-5">Hotel La Pradera — Donde cada detalle importa</p>
</div>

{{-- CARRUSEL --}}
<div id="carouselInicio" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
                 class="d-block w-100" alt="Hotel La Pradera">
            <div class="carousel-caption d-none d-md-block"
                 style="background:rgba(13,59,110,0.6); border-radius:10px; padding:15px;">
                <h5>🏨 Lujo y Confort</h5>
                <p>Habitaciones diseñadas para tu descanso perfecto</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9"
                 class="d-block w-100" alt="Piscina">
            <div class="carousel-caption d-none d-md-block"
                 style="background:rgba(13,59,110,0.6); border-radius:10px; padding:15px;">
                <h5>💧 Zonas de Relajación</h5>
                <p>Piscina, spa y zonas húmedas para tu bienestar</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0"
                 class="d-block w-100" alt="Restaurante">
            <div class="carousel-caption d-none d-md-block"
                 style="background:rgba(13,59,110,0.6); border-radius:10px; padding:15px;">
                <h5>🍽️ Gastronomía de Autor</h5>
                <p>Sabores únicos en nuestro restaurante gourmet</p>
            </div>
        </div>
    </div>
@endsection