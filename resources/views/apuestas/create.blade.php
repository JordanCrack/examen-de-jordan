@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Crear Apuesta</h1>
        <form action="{{ route('apuestas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="juego_id">Juego</label>
                <select name="juego_id" id="juego_id" class="form-control" required>
                    @foreach($juegos as $juego)
                        <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="datetime-local" name="fecha" id="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="number" name="monto" id="monto" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Apuesta</button>
        </form>
    </div>
@endsection

