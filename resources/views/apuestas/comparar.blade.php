@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Comparar Dinero de Apuestas</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-text">Total dinero en juegos de cartas: <strong>{{ $totalJuegosDeCartas }}</strong></p>
                <p class="card-text">Total dinero en otros juegos: <strong>{{ $totalOtrosJuegos }}</strong></p>
            </div>
        </div>
    </div>
@endsection

