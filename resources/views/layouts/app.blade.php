<!DOCTYPE html>
<html>
<head>
    <title>Apuestas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav>
        <a href="{{ route('apuestas.index') }}">Ver Apuestas</a>
        <a href="{{ route('apuestas.create') }}">Crear Apuesta</a>
        <a href="{{ route('apuestas.juegos_mayores_a_3') }}">Apuestas Juegos > 3 Jugadores</a>
        <a href="{{ route('apuestas.comparar_dinero') }}">Comparar Dinero</a>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>
