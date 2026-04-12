@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')

<style>
    .hero-mensajes {
        background: linear-gradient(135deg, #0d3b6e 0%, #1565c0 100%);
        color: white;
        padding: 40px 20px;
        border-radius: 15px;
        margin-bottom: 40px;
        text-align: center;
    }
    .badge-tipo {
        font-size: 0.85rem;
        padding: 6px 12px;
        border-radius: 20px;
    }
    .badge-pago {
        font-size: 0.8rem;
        padding: 5px 10px;
        border-radius: 20px;
    }
</style>

{{-- HERO --}}
<div class="hero-mensajes">
    <h2 class="fw-bold">📋 Mensajes Recibidos</h2>
    <p class="lead mb-0">Panel de gestión — Hotel La Pradera</p>
</div>

{{-- CONTADOR --}}
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-center p-3">
            <h3 class="fw-bold" style="color:#0d3b6e;">{{ $mensajes->count() }}</h3>
            <p class="text-muted mb-0">Total Mensajes</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-center p-3">
            <h3 class="fw-bold text-danger">{{ $mensajes->where('tipo', 'Queja')->count() }}</h3>
            <p class="text-muted mb-0">😠 Quejas</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-center p-3">
            <h3 class="fw-bold text-primary">{{ $mensajes->where('tipo', 'Petición')->count() }}</h3>
            <p class="text-muted mb-0">📋 Peticiones</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm text-center p-3">
            <h3 class="fw-bold text-success">{{ $mensajes->where('tipo', 'Felicitación')->count() }}</h3>
            <p class="text-muted mb-0">🌟 Felicitaciones</p>
        </div>
    </div>
</div>

{{-- TABLA --}}
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead style="background-color:#0d3b6e; color:white;">
                    <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Nacionalidad</th>
                        <th>Documento</th>
                        <th>Tipo Pago</th>
                        <th>Tipo</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mensajes as $mensaje)
                    <tr>
                        <td>{{ $mensaje->id }}</td>
                        <td>{{ $mensaje->nombres }}</td>
                        <td>{{ $mensaje->apellidos }}</td>
                        <td>{{ $mensaje->correo }}</td>
                        <td>
                            @if($mensaje->nacionalidad == 'Nacional')
                                🇨🇴 Nacional
                            @elseif($mensaje->nacionalidad == 'Extranjero')
                                ✈️ Extranjero
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td>
                            @if($mensaje->tipo_documento)
                                <small>{{ $mensaje->tipo_documento }}</small><br>
                                <strong>{{ $mensaje->numero_documento }}</strong>
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td>
                            @if($mensaje->tipo_pago)
                                <span class="badge bg-secondary badge-pago">{{ $mensaje->tipo_pago }}</span>
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td>
                            @if($mensaje->tipo == 'Queja')
                                <span class="badge bg-danger badge-tipo">😠 Queja</span>
                            @elseif($mensaje->tipo == 'Petición')
                                <span class="badge bg-primary badge-tipo">📋 Petición</span>
                            @elseif($mensaje->tipo == 'Felicitación')
                                <span class="badge bg-success badge-tipo">🌟 Felicitación</span>
                            @endif
                        </td>
                        <td style="max-width:200px;">
                            <small>{{ $mensaje->mensaje }}</small>
                        </td>
                        <td>
                            <small class="text-muted">
                                {{ $mensaje->created_at->format('d/m/Y H:i') }}
                            </small>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center text-muted py-4">
                            No hay mensajes registrados aún.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="text-center mt-4">
    <a href="{{ route('nosotros') }}" class="btn btn-primary px-5">
        📝 Ir al Formulario
    </a>
</div>

@endsection