<?php

namespace App\Http\Controllers;
use App\Models\Dica;

use Illuminate\Http\Request;

class DicaController extends Controller
{
    public function index()
    {
        $dicas = Dica::all();
        return view('dicas.index'); 
    }
}
