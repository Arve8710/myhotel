@extends('layouts.app')

@section('title', 'Reservas')

@section('content')

<style>
    .hero-reservas {
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
    .form-label {
        font-weight: 600;
        color: #0d3b6e;
    }
    .form-control, .form-select {
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 10px 15px;
        transition: border-color 0.3s;
    }
    .form-control:focus, .form-select:focus {
        border-color: #1565c0;
        box-shadow: 0 0 0 0.2rem rgba(21,101,192,0.15);
    }
    .btn-enviar {
        background: linear-gradient(135deg, #0d3b6e, #1565c0);
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-size: 1.1rem;
        font-weight: bold;
        letter-spacing: 1px;
        transition: opacity 0.3s;
    }
    .btn-enviar:hover {
        opacity: 0.9;
    }
    .tipo-card {
        cursor: pointer;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 15px;
        text-align: center;
        transition: all 0.3s;
    }
    .tipo-card:hover {
        border-color: #1565c0;
        background-color: #e8f4fd;
    }
    .tipo-card.selected {
        border-color: #0d3b6e;
        background-color: #e8f4fd;
    }
    .estrella {
        font-size: 2rem;
        cursor: pointer;
        color: #ccc;
        transition: color 0.2s;
    }
    .estrella.activa {
        color: #f5a623;
    }
    .seccion-titulo {
        color: #1565c0;
        border-bottom: 2px solid #e8f4fd;
        padding-bottom: 8px;
        margin-bottom: 20px;
    }
</style>

{{-- HERO --}}
<div class="hero-reservas">
    <h2 class="fw-bold">🏨 Experiencia del Huésped</h2>
    <p class="lead mb-0">Tu opinión es lo más importante para nosotros en Hotel La Pradera</p>
</div>

{{-- ALERTAS --}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-4">
        ✅ {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger mb-4">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- FORMULARIO --}}
<div class="seccion-fondo">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h4 class="fw-bold text-center mb-4" style="color:#0d3b6e;">
                📝 Formulario PQRS — Hotel La Pradera
            </h4>

            <div class="card border-0 shadow-lg p-4 p-md-5">
                <form action="{{ route('pqrs.store') }}" method="POST">
                    @csrf

                    {{-- DATOS PERSONALES --}}
                    <h6 class="fw-bold seccion-titulo">👤 Datos Personales</h6>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label">Nombres</label>
                            <input type="text" name="nombres"
                                   class="form-control @error('nombres') is-invalid @enderror"
                                   value="{{ old('nombres') }}"
                                   placeholder="Tu nombre completo">
                            @error('nombres')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" name="apellidos"
                                   class="form-control @error('apellidos') is-invalid @enderror"
                                   value="{{ old('apellidos') }}"
                                   placeholder="Tus apellidos">
                            @error('apellidos')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="correo"
                               class="form-control @error('correo') is-invalid @enderror"
                               value="{{ old('correo') }}"
                               placeholder="correo@ejemplo.com">
                        @error('correo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NACIONALIDAD Y DOCUMENTO --}}
                    <h6 class="fw-bold seccion-titulo mt-4">🌍 Nacionalidad e Identificación</h6>

                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="form-label">Nacionalidad</label>
                            <select name="nacionalidad"
                                    class="form-select @error('nacionalidad') is-invalid @enderror"
                                    onchange="actualizarDocumento(this.value)">
                                <option value="">-- Seleccione --</option>
                                <option value="Nacional"   {{ old('nacionalidad') == 'Nacional'   ? 'selected' : '' }}>🇨🇴 Nacional</option>
                                <option value="Extranjero" {{ old('nacionalidad') == 'Extranjero' ? 'selected' : '' }}>✈️ Extranjero</option>
                            </select>
                            @error('nacionalidad')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="form-label">Tipo de Documento</label>
                            <select name="tipo_documento" id="tipoDocumento"
                                    class="form-select @error('tipo_documento') is-invalid @enderror">
                                <option value="">-- Seleccione --</option>
                                <option value="Cédula"    {{ old('tipo_documento') == 'Cédula'    ? 'selected' : '' }}>Cédula</option>
                                <option value="Pasaporte" {{ old('tipo_documento') == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                                <option value="Visa"      {{ old('tipo_documento') == 'Visa'      ? 'selected' : '' }}>Visa</option>
                            </select>
                            @error('tipo_documento')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Número de Documento</label>
                            <input type="text" name="numero_documento"
                                   class="form-control @error('numero_documento') is-invalid @enderror"
                                   value="{{ old('numero_documento') }}"
                                   placeholder="Ej: 123456789">
                            @error('numero_documento')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- TIPO DE PAGO --}}
                    <h6 class="fw-bold seccion-titulo mt-4">💳 Método de Pago</h6>

                    <div class="row mb-3 g-3">
                        <div class="col-md-3">
                            <div class="tipo-card {{ old('tipo_pago') == 'Efectivo' ? 'selected' : '' }}"
                                 onclick="seleccionarPago('Efectivo', this)">
                                <div style="font-size:2rem;">💵</div>
                                <div class="fw-bold">Efectivo</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tipo-card {{ old('tipo_pago') == 'Tarjeta Crédito' ? 'selected' : '' }}"
                                 onclick="seleccionarPago('Tarjeta Crédito', this)">
                                <div style="font-size:2rem;">💳</div>
                                <div class="fw-bold">Tarjeta Crédito</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tipo-card {{ old('tipo_pago') == 'Tarjeta Débito' ? 'selected' : '' }}"
                                 onclick="seleccionarPago('Tarjeta Débito', this)">
                                <div style="font-size:2rem;">🏧</div>
                                <div class="fw-bold">Tarjeta Débito</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tipo-card {{ old('tipo_pago') == 'Transferencia' ? 'selected' : '' }}"
                                 onclick="seleccionarPago('Transferencia', this)">
                                <div style="font-size:2rem;">🏦</div>
                                <div class="fw-bold">Transferencia</div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="tipo_pago" id="tipoPagoSeleccionado" value="{{ old('tipo_pago') }}">
                    @error('tipo_pago')
                        <div class="alert alert-danger py-1 mb-3">{{ $message }}</div>
                    @enderror

                    {{-- TIPO DE SOLICITUD --}}
                    <h6 class="fw-bold seccion-titulo mt-4">📋 Tipo de Solicitud</h6>

                    <div class="row mb-3 g-3">
                        <div class="col-md-4">
                            <div class="tipo-card {{ old('tipo') == 'Queja' ? 'selected' : '' }}"
                                 onclick="seleccionarTipo('Queja', this)">
                                <div style="font-size:2rem;">😠</div>
                                <div class="fw-bold">Queja</div>
                                <small class="text-muted">Algo no estuvo bien</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tipo-card {{ old('tipo') == 'Petición' ? 'selected' : '' }}"
                                 onclick="seleccionarTipo('Petición', this)">
                                <div style="font-size:2rem;">📋</div>
                                <div class="fw-bold">Petición</div>
                                <small class="text-muted">Necesito algo del hotel</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tipo-card {{ old('tipo') == 'Felicitación' ? 'selected' : '' }}"
                                 onclick="seleccionarTipo('Felicitación', this)">
                                <div style="font-size:2rem;">🌟</div>
                                <div class="fw-bold">Felicitación</div>
                                <small class="text-muted">Quiero felicitar al equipo</small>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="tipo" id="tipoSeleccionado" value="{{ old('tipo') }}">
                    @error('tipo')
                        <div class="alert alert-danger py-1 mb-3">{{ $message }}</div>
                    @enderror

                    {{-- MENSAJE --}}
                    <h6 class="fw-bold seccion-titulo mt-4">💬 Tu Mensaje</h6>

                    <div class="mb-4">
                        <label class="form-label">Cuéntanos tu experiencia</label>
                        <textarea name="mensaje" rows="5"
                                  class="form-control @error('mensaje') is-invalid @enderror"
                                  placeholder="Describe detalladamente tu queja, petición o felicitación...">{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- CALIFICACIÓN --}}
                    <h6 class="fw-bold seccion-titulo mt-4">⭐ Calificación General</h6>

                    <div class="text-center mb-4">
                        <p class="text-muted mb-2">¿Cómo calificarías tu experiencia en Hotel La Pradera?</p>
                        <div id="estrellas">
                            <span class="estrella" onclick="calificar(1)">★</span>
                            <span class="estrella" onclick="calificar(2)">★</span>
                            <span class="estrella" onclick="calificar(3)">★</span>
                            <span class="estrella" onclick="calificar(4)">★</span>
                            <span class="estrella" onclick="calificar(5)">★</span>
                        </div>
                        <small class="text-muted" id="textoCalificacion">Selecciona una calificación</small>
                    </div>

                    {{-- TÉRMINOS --}}
                    <div class="form-check mb-4">
                        <input type="checkbox" name="acepto"
                               class="form-check-input @error('acepto') is-invalid @enderror"
                               id="acepto">
                        <label class="form-check-label text-muted" for="acepto">
                            Acepto los <strong>términos y condiciones</strong> y autorizo el tratamiento de mis datos personales
                        </label>
                        @error('acepto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-enviar w-100 text-white">
                        📤 Enviar al Hotel La Pradera
                    </button>

                </form>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('mensajes') }}" class="text-muted">
                    📋 Ver mensajes enviados →
                </a>
            </div>

        </div>
    </div>
</div>

<script>
    function seleccionarTipo(tipo, el) {
        document.getElementById('tipoSeleccionado').value = tipo;
        document.querySelectorAll('.tipo-card').forEach(c => c.classList.remove('selected'));
        el.classList.add('selected');
    }

    function seleccionarPago(pago, el) {
        document.getElementById('tipoPagoSeleccionado').value = pago;
        document.querySelectorAll('.tipo-card').forEach(c => c.classList.remove('selected'));
        el.classList.add('selected');
    }

    const textos = ['','Muy malo 😞','Malo 😕','Regular 😐','Bueno 😊','Excelente 🤩'];
    function calificar(n) {
        document.querySelectorAll('.estrella').forEach((e, i) => {
            e.classList.toggle('activa', i < n);
        });
        document.getElementById('textoCalificacion').textContent = textos[n];
    }

    function actualizarDocumento(val) {
        const select = document.getElementById('tipoDocumento');
        select.innerHTML = '<option value="">-- Seleccione --</option>';
        if(val === 'Nacional') {
            select.innerHTML += '<option value="Cédula">Cédula</option>';
        } else if(val === 'Extranjero') {
            select.innerHTML += '<option value="Pasaporte">Pasaporte</option>';
            select.innerHTML += '<option value="Visa">Visa</option>';
        }
    }
</script>

@endsection