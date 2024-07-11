<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apuesta;
use App\Models\Juego;

class ApuestaController extends Controller
{
    public function index()
    {
        $apuestas = Apuesta::with('juego')->get();
        return view('apuestas.index', compact('apuestas'));
    }

    public function apuestasDeJuegosMayoresA3()
    {
        $apuestas = Apuesta::whereHas('juego', function($query) {
            $query->where('cantidad_jugadores', '>', 3);
        })->with('juego')->get();

        return view('apuestas.index', compact('apuestas'));
    }

    public function compararDinero()
    {
        $totalJuegosDeCartas = Apuesta::whereHas('juego', function($query) {
            $query->where('juego_de_cartas', true);
        })->sum('monto');

        $totalOtrosJuegos = Apuesta::whereHas('juego', function($query) {
            $query->where('juego_de_cartas', false);
        })->sum('monto');

        return view('apuestas.comparar', compact('totalJuegosDeCartas', 'totalOtrosJuegos'));
    }

    public function buscar(Request $request)
    {
        $juego_id = $request->input('juego_id');
        $apuestas = Apuesta::where('juego_id', $juego_id)->with('juego')->get();

        return view('apuestas.index', compact('apuestas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'juego_id' => 'required|exists:juegos,id',
            'fecha' => 'required|date',
            'monto' => 'required|integer'
        ]);

        Apuesta::create($request->all());

        return redirect()->route('apuestas.index')->with('success', 'Apuesta creada con éxito.');
    }
    public function create()
{
    $juegos = Juego::all();
    return view('apuestas.create', compact('juegos'));
}

}
