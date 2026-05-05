<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro | Hotel La Pradera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0d3b6e 0%, #1565c0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Lato', sans-serif;
        }
        .register-card {
            background: white;
            border-radius: 20px;
            padding: 45px 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 460px;
        }
        .hotel-logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .hotel-logo h1 {
            font-family: 'Playfair Display', serif;
            color: #0d3b6e;
            font-size: 2rem;
            margin: 0;
        }
        .hotel-logo span { color: #1565c0; }
        .hotel-logo p {
            color: #888;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        .icon-hotel { font-size: 3rem; margin-bottom: 10px; }
        .form-control {
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #1565c0;
            box-shadow: 0 0 0 0.2rem rgba(21,101,192,0.15);
        }
        .form-label {
            font-weight: 600;
            color: #0d3b6e;
            margin-bottom: 5px;
        }
        .btn-register {
            background: linear-gradient(135deg, #0d3b6e, #1565c0);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            letter-spacing: 1px;
            color: white;
            width: 100%;
            transition: opacity 0.3s;
        }
        .btn-register:hover { opacity: 0.9; color: white; }
        .link-login {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .link-login a {
            color: #1565c0;
            font-weight: bold;
            text-decoration: none;
        }
        .link-login a:hover { text-decoration: underline; }
        .back-link {
            text-align: center;
            margin-top: 15px;
        }
        .back-link a {
            color: #1565c0;
            font-size: 0.85rem;
            text-decoration: none;
        }
        .back-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="register-card">

    {{-- LOGO --}}
    <div class="hotel-logo">
        <div class="icon-hotel">🏨</div>
        <h1>Hotel <span>La Pradera</span></h1>
        <p>Crea tu cuenta para acceder al sistema</p>
    </div>

    {{-- ERRORES --}}
    @if ($errors->any())
        <div class="alert alert-danger mb-3">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    {{-- FORMULARIO --}}
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre completo</label>
            <input id="name" type="text" name="name"
                   class="form-control"
                   value="{{ old('name') }}"
                   required autofocus
                   placeholder="Tu nombre completo">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input id="email" type="email" name="email"
                   class="form-control"
                   value="{{ old('email') }}"
                   required
                   placeholder="correo@ejemplo.com">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input id="password" type="password" name="password"
                   class="form-control"
                   required
                   placeholder="Mínimo 8 caracteres">
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                   class="form-control"
                   required
                   placeholder="Repite tu contraseña">
        </div>

        <button type="submit" class="btn btn-register">
            ✅ Crear cuenta
        </button>

    </form>

    <div class="link-login">
        ¿Ya tienes cuenta?
        <a href="{{ route('login') }}">Inicia sesión aquí</a>
    </div>

    <div class="back-link">
        <a href="{{ route('inicio') }}">← Volver al inicio</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    