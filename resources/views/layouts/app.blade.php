<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Examen</title>
    <style>
        nav a {
            padding: 10px;
            text-decoration: none;
            color: blue;
        }
        nav a.active {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ route('servicios') }}" class="{{ request()->is('servicios') ? 'active' : '' }}">Servicios</a>
        <a href="{{ route('proyectos') }}" class="{{ request()->is('proyectos') ? 'active' : '' }}">Proyectos</a>
        <a href="{{ route('clientes.index') }}" class="{{ request()->is('clientes') ? 'active' : '' }}">Clientes</a>
        <a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a>
        <a href="{{ route('contacto') }}" class="{{ request()->is('contacto') ? 'active' : '' }}">Contacto</a>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
