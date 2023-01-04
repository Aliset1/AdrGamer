<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Inscriptionsgr;
use App\Models\Categorie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    public function __construct()
    {

    }
    public function CountInscripcionesByGame(Request $request)
    {
        //Mostrar todos los juegos
        $resultado = Game::join("inscriptionsgrs", "inscriptionsgrs.id_juego", "=", "games.id");
        $resultado = $resultado->select("inscriptionsgrs.id","games.nombre","inscriptionsgrs.id_juego");
        $resultado = $resultado->get();
        // Obtener el juego con mayor numero de inscritos en la variable resultado
        $resultado = $resultado->groupBy('id_juego');
        $resultado = $resultado->map(function ($resultado, $key) {
            return $resultado = [
                'nombre' => $resultado[0]->nombre,
                'inscritos' => $resultado->count()
            ];
        });
        return response()->json($resultado);
    }
    public function MaxInscritoByGame(Request $request)
    {
        //Mostrar todos los juegos
        $resultado = Game::join("inscriptionsgrs", "inscriptionsgrs.id_juego", "=", "games.id");
        $resultado = $resultado->select("inscriptionsgrs.id","games.nombre","inscriptionsgrs.id_juego");
        $resultado = $resultado->get();
        // Obtener el juego con mayor numero de inscritos en la variable resultado
        $resultado = $resultado->groupBy('id_juego');
        $resultado = $resultado->map(function ($resultado, $key) {
            return $resultado = [
                'nombre' => $resultado[0]->nombre,
                'inscritos' => $resultado->count()
            ];
        });
        // Resultado con mas inscritos
        $resultado = $resultado->sortByDesc('inscritos')->first();
        return response()->json($resultado);
    }
    public function list(Request $request)
    {
        $resultado = Game::all();
        return response()->json($resultado);
    }

    public function listByCategory($id)
    {
        $resultado = Game::where('id_categoria', $id)->get();
        return response()->json($resultado);
    }
}
