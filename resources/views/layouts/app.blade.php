<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Hotel La Pradera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Lato:wght@300;400&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f9f6f1;
        }

        .navbar {
            background-color: #0d3b6e !important;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            color: #ffffff !important;
            letter-spacing: 2px;
        }

        .navbar-brand span {
            color: #90caf9 !important;
        }

        .nav-link {
            color: #e3f2fd !important;
            font-size: 0.95rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 0 8px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #ffffff !important;
            border-bottom: 2px solid #90caf9;
        }

        footer {
            background-color: #0d3b6e;
            color: #e3f2fd;
            text-align: center;
            padding: 20px;
            margin-top: 4rem;
            font-size: 0.85rem;
        }

        footer span {
            color: #90caf9;
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">

    <a class="navbar-brand" href="{{ route('inicio') }}">
        🏨 Hotel <span>La Pradera</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menú</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Reservas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('mensajes') }}">Mensajes</a></li>
      </ul>
    </div>

  </div>
</nav>

<div class="container py-5">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            ✅ {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</div>

<footer>
    © 2026 <span>Hotel La Pradera</span> — Todos los derechos reservados
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

