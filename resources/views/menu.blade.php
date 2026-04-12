@extends('layouts.app')

@section('title', 'Menú')

@section('content')

<style>
    .section-title {
        color: #0d3b6e;
        border-bottom: 3px solid #90caf9;
        padding-bottom: 8px;
        margin-bottom: 25px;
    }
    .nav-pills .nav-link {
        color: #0d3b6e;
        font-weight: 600;
        border: 2px solid #0d3b6e;
        margin: 4px;
        border-radius: 25px;
    }
    .nav-pills .nav-link.active {
        background-color: #0d3b6e;
        color: white;
    }
    .nav-pills .nav-link:hover {
        background-color: #0d3b6e;
        color: white;
    }
    .hero-menu {
        background: linear-gradient(135deg, #0d3b6e 0%, #1565c0 50%, #0d47a1 100%);
        color: white;
        padding: 60px 20px;
        border-radius: 15px;
        margin-bottom: 40px;
        text-align: center;
    }
    .hero-menu h2 {
        font-size: 2.5rem;
        font-weight: bold;
    }
    .seccion-fondo {
        background: linear-gradient(135deg, #e8f4fd, #f0f7ff);
        border-radius: 15px;
        padding: 35px;
        margin-bottom: 20px;
    }
    .card {
        border-radius: 12px;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .badge-precio {
        font-size: 0.9rem;
        padding: 7px 12px;
        border-radius: 20px;
    }
</style>

{{-- HERO --}}
<div class="hero-menu">
    <h2>🏨 Hotel La Pradera</h2>
    <p class="lead mb-0">Descubre todos nuestros espacios y servicios de lujo</p>
</div>

{{-- MENÚ NAVEGACIÓN DESPLEGABLE --}}
<div class="text-center mb-5">
    <ul class="nav nav-pills justify-content-center flex-wrap" id="menuTab">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#habitaciones">🛏️ Habitaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#zonas">💧 Zonas Húmedas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#restaurante">🍽️ Restaurante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#salones">🎊 Salones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#gimnasio">💪 Gimnasio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#bar">🍹 Bar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#parqueadero">🚗 Parqueadero</a>
        </li>
    </ul>
</div>

{{-- CONTENIDO DE CADA SECCIÓN --}}
<div class="tab-content">

    {{-- HABITACIONES --}}
    <div class="tab-pane fade show active" id="habitaciones">
        <div class="seccion-fondo">
            <h4 class="section-title">🛏️ Habitaciones</h4>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Sencilla">
                        <div class="card-body">
                            <h5 class="fw-bold">Habitación Sencilla</h5>
                            <p class="text-muted">Cama sencilla, baño privado, TV y WiFi. Ideal para viajeros solos.</p>
                            <span class="badge bg-primary badge-precio">$120.000 / noche</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-primary">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Estándar">
                        <div class="card-body">
                            <h5 class="fw-bold">Habitación Estándar</h5>
                            <p class="text-muted">Cama doble, escritorio, aire acondicionado y baño con ducha.</p>
                            <span class="badge bg-primary badge-precio">$180.000 / noche</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-primary">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Junior">
                        <div class="card-body">
                            <h5 class="fw-bold">Junior</h5>
                            <p class="text-muted">Cama queen, sofá, minibar y vista al jardín interior.</p>
                            <span class="badge bg-primary badge-precio">$250.000 / noche</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-primary">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Junior Suite">
                        <div class="card-body">
                            <h5 class="fw-bold">Junior Suite</h5>
                            <p class="text-muted">Sala de estar, cama king size, bañera y amenities de lujo.</p>
                            <span class="badge bg-primary badge-precio">$350.000 / noche</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-primary">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Suite Ejecutiva">
                        <div class="card-body">
                            <h5 class="fw-bold">Suite Ejecutiva</h5>
                            <p class="text-muted">Oficina privada, sala de reuniones, cama king y desayuno incluido.</p>
                            <span class="badge bg-warning text-dark badge-precio">$550.000 / noche</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-warning">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1631049421450-348ccd7f8949"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Suite Presidencial">
                        <div class="card-body">
                            <h5 class="fw-bold">Suite Presidencial</h5>
                            <p class="text-muted">Dos habitaciones, jacuzzi privado, terraza exclusiva y mayordomo personal.</p>
                            <span class="badge bg-danger badge-precio">$1.200.000 / noche</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-danger">Reservar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ZONAS HÚMEDAS --}}
    <div class="tab-pane fade" id="zonas">
        <div class="seccion-fondo">
            <h4 class="section-title">💧 Zonas Húmedas</h4>
            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f"
                             class="card-img-top" style="height:180px; object-fit:cover;" alt="Piscina">
                        <div class="card-body">
                            <h5 class="fw-bold">🏊 Piscina</h5>
                            <p class="text-muted small">Piscina al aire libre con zona de descanso. 6am - 9pm.</p>
                            <span class="badge bg-info text-dark">Incluida</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef"
                             class="card-img-top" style="height:180px; object-fit:cover;" alt="Sauna">
                        <div class="card-body">
                            <h5 class="fw-bold">🔥 Sauna</h5>
                            <p class="text-muted small">Sauna seco y turco con temperatura regulada y ambiente relajante.</p>
                            <span class="badge bg-primary">$40.000 / sesión</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2"
                             class="card-img-top" style="height:180px; object-fit:cover;" alt="Jacuzzi">
                        <div class="card-body">
                            <h5 class="fw-bold">🛁 Jacuzzi</h5>
                            <p class="text-muted small">Tinas de hidromasaje con aromaterapia y música relajante.</p>
                            <span class="badge bg-primary">$60.000 / sesión</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874"
                             class="card-img-top" style="height:180px; object-fit:cover;" alt="Sala de Masajes">
                        <div class="card-body">
                            <h5 class="fw-bold">💆 Sala de Masajes</h5>
                            <p class="text-muted small">Masajes terapéuticos, relajantes y descontracturantes con terapeutas certificados.</p>
                            <span class="badge bg-primary">$90.000 / sesión</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1560185007-c5ca9d2c014d"
                             class="card-img-top" style="height:180px; object-fit:cover;" alt="Sala de Descanso">
                        <div class="card-body">
                            <h5 class="fw-bold">😴 Sala de Descanso</h5>
                            <p class="text-muted">Espacio tranquilo con camillas, música suave y aromaterapia para relajarte antes o después de tus tratamientos.</p>
                            <span class="badge bg-info text-dark">Incluida con cualquier servicio</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1"
                             class="card-img-top" style="height:180px; object-fit:cover;" alt="Spa Completo">
                        <div class="card-body">
                            <h5 class="fw-bold">✨ Paquete Spa Completo</h5>
                            <p class="text-muted">Incluye sauna, jacuzzi, masaje de 60 min y sala de descanso. La experiencia total de bienestar.</p>
                            <span class="badge bg-danger">$180.000 / persona</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-danger">Reservar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- RESTAURANTE --}}
    <div class="tab-pane fade" id="restaurante">
        <div class="seccion-fondo">
            <h4 class="section-title">🍽️ Restaurante</h4>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Desayuno">
                        <div class="card-body">
                            <h5 class="fw-bold">Desayuno Buffet</h5>
                            <p class="text-muted">Frutas, huevos, pan artesanal, jugos naturales y café.</p>
                            <span class="badge bg-success badge-precio">$25.000 / persona</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Almuerzo">
                        <div class="card-body">
                            <h5 class="fw-bold">Almuerzo Ejecutivo</h5>
                            <p class="text-muted">Sopa, plato fuerte, jugo natural y postre incluido.</p>
                            <span class="badge bg-success badge-precio">$35.000 / persona</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Cena">
                        <div class="card-body">
                            <h5 class="fw-bold">Cena Gourmet</h5>
                            <p class="text-muted">Platos de autor con ingredientes locales y maridaje especial.</p>
                            <span class="badge bg-success badge-precio">$65.000 / persona</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- SALONES DE EVENTOS --}}
    <div class="tab-pane fade" id="salones">
        <div class="seccion-fondo">
            <h4 class="section-title">🎊 Salones de Eventos</h4>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Salón Principal">
                        <div class="card-body">
                            <h5 class="fw-bold">Salón Principal</h5>
                            <p class="text-muted">Capacidad 300 personas. Bodas, grados y eventos corporativos.</p>
                            <span class="badge bg-warning text-dark badge-precio">Desde $800.000</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-warning">Cotizar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Salón Empresarial">
                        <div class="card-body">
                            <h5 class="fw-bold">Salón Empresarial</h5>
                            <p class="text-muted">Videobeam, sonido profesional y AC. Capacidad 80 personas.</p>
                            <span class="badge bg-warning text-dark badge-precio">Desde $350.000</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-warning">Cotizar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3"
                             class="card-img-top" style="height:200px; object-fit:cover;" alt="Terraza">
                        <div class="card-body">
                            <h5 class="fw-bold">Terraza al Aire Libre</h5>
                            <p class="text-muted">Vista panorámica. Ideal para cócteles y reuniones especiales.</p>
                            <span class="badge bg-warning text-dark badge-precio">Desde $200.000</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('contacto') }}" class="btn btn-sm btn-outline-warning">Cotizar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- GIMNASIO --}}
    <div class="tab-pane fade" id="gimnasio">
        <div class="seccion-fondo">
            <h4 class="section-title">💪 Gimnasio</h4>
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48"
                             class="card-img-top" style="height:250px; object-fit:cover;" alt="Gimnasio">
                        <div class="card-body">
                            <h5 class="fw-bold">Gimnasio Completo</h5>
                            <p class="text-muted">Máquinas cardio, pesas libres, zona funcional y entrenador personal disponible. Horario: 5am - 10pm.</p>
                            <span class="badge bg-danger badge-precio">Gratuito para huéspedes</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold mb-3">📋 Servicios del Gimnasio</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">🏋️ Zona de pesas y máquinas</li>
                            <li class="list-group-item">🚴 Bicicletas estáticas y cintas</li>
                            <li class="list-group-item">🧘 Clases de yoga y pilates</li>
                            <li class="list-group-item">👟 Entrenador personal</li>
                            <li class="list-group-item">🥤 Barra de jugos y proteínas</li>
                            <li class="list-group-item">🚿 Vestidores y duchas</li>
                        </ul>
                        <div class="mt-3">
                            <span class="badge bg-primary badge-precio">Entrenador personal: $50.000 / sesión</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- BAR --}}
    <div class="tab-pane fade" id="bar">
        <div class="seccion-fondo">
            <h4 class="section-title">🍹 Bar La Pradera</h4>
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187"
                             class="card-img-top" style="height:250px; object-fit:cover;" alt="Bar">
                        <div class="card-body">
                            <h5 class="fw-bold">Bar La Pradera</h5>
                            <p class="text-muted">Cócteles artesanales, vinos seleccionados y cervezas importadas. Música en vivo los fines de semana. Abierto hasta las 2am.</p>
                            <span class="badge bg-danger badge-precio">Abierto todos los días</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold mb-3">🍸 Carta de Bebidas</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🍹 Cócteles artesanales</span>
                                <span class="badge bg-primary">Desde $18.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🍷 Copa de vino</span>
                                <span class="badge bg-primary">Desde $22.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🍺 Cerveza importada</span>
                                <span class="badge bg-primary">Desde $12.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>☕ Café de autor</span>
                                <span class="badge bg-primary">Desde $8.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🥃 Whisky premium</span>
                                <span class="badge bg-primary">Desde $35.000</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- PARQUEADERO --}}
    <div class="tab-pane fade" id="parqueadero">
        <div class="seccion-fondo">
            <h4 class="section-title">🚗 Parqueadero</h4>
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="card shadow h-100">
                        <img src="https://images.unsplash.com/photo-1506521781263-d8422e82f27a"
                             class="card-img-top" style="height:220px; object-fit:cover;" alt="Parqueadero">
                        <div class="card-body">
                            <h5 class="fw-bold">Parqueadero Privado</h5>
                            <p class="text-muted">Cubierto, vigilancia 24 horas, cámaras de seguridad y valet parking. Capacidad 100 vehículos.</p>
                            <span class="badge bg-secondary badge-precio">Gratuito para huéspedes</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold mb-3">💲 Tarifas Visitantes</h5>
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>Tiempo</th>
                                    <th>Tarifa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Primera hora</td><td>$3.000</td></tr>
                                <tr><td>Hora adicional</td><td>$2.000</td></tr>
                                <tr><td>Medio día (6h)</td><td>$10.000</td></tr>
                                <tr><td>Día completo</td><td>$15.000</td></tr>
                                <tr><td>Mensualidad</td><td>$180.000</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

{{-- BOTÓN FINAL --}}
<div class="text-center mt-5 mb-4 p-4 rounded" style="background: linear-gradient(135deg, #0d3b6e, #1565c0); color:white;">
    <h5 class="fw-bold">¿Te gustaría reservar o tienes alguna pregunta?</h5>
    <p class="mb-3">Nuestro equipo está listo para atenderte las 24 horas</p>
    <a href="{{ route('contacto') }}" class="btn btn-light px-5 py-2 me-2 fw-bold">📬 Contáctanos</a>
    <a href="{{ route('mensajes') }}" class="btn btn-outline-light px-5 py-2 fw-bold">📋 Ver Mensajes</a>
</div>

@endsection