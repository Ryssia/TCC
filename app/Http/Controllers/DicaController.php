<?php

namespace App\Http\Controllers;
use App\Models\Dica;

use Illuminate\Http\Request;

class DicaController extends Controller
{
    public function index()
    {
        //$dicas = Dica::all();
        $dica_fluxo = Dica::where('categoria_id', 1)->get();
        $dica_colica = Dica::where('categoria_id', 2)->get();
        $dica_dores = Dica::whereIn('categoria_id',[3, 4])->get(); //pega tanto dor de cabeça, quanto dor nos seios
        $dica_absorvente = Dica::where('categoria_id', 5)->get();
        return view('dicas.index', compact('dica_fluxo', 'dica_colica', 'dica_dores', 'dica_absorvente')); 
    }
}
