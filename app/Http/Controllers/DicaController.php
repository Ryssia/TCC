<?php

namespace App\Http\Controllers;
use App\Models\Dica;

use Illuminate\Http\Request;

class DicaController extends Controller
{
    public function index()
    {
        //$dicas = Dica::all();
        $dica_absorvente = Dica::where('categoria_id', 1)->get();
        $dica_fluxo = Dica::where('categoria_id', 2)->get();
        $dica_colica = Dica::where('categoria_id', 3)->get();
        $dica_geral = Dica::where('categoria_id', 4)->get();
        return view('dicas.index', compact('dica_absorvente', 'dica_fluxo', 'dica_colica','dica_geral')); 
    }
}
