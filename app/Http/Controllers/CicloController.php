<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciclo;

class CicloController extends Controller
{
    
    public function index()
    {
        $ciclos = Ciclo::all();
        
       // return view('ciclos.index')->with('ciclos', $ciclos)
       return $ciclos->toJson();
    }

  
    public function create()
    {
        $ciclos = Ciclo::all();
    
        //return view('ciclos.create')->with('ciclos', $ciclos);
    }

   
    public function store(Request $request)
    {
        $ciclos = new Ciclo();
            $ciclos->inicio = $request->get('inicio');
            $ciclos->final = $request->get('final');
            $ciclos->fluxo = $request->get('fluxo');
            $ciclos->colica = $request->get('colica');
            $ciclos->dor_cabeca = $request->get('dor_cabeca');
            $ciclos->dor_seios = $request->get('dor_seios');
            $ciclos->user_id = $request->user_id;
            $ciclos->save();
            
            echo"ok";

            // return redirect()->route('ciclos.index');

        
    }

    
    public function show($id)
    {
        $ciclo = Ciclo::find($id);
    }

   
    public function edit($id)
    {
        $ciclo = Ciclo::find($id);
    }

   
    public function update(Request $request, $id)
    {
        $ciclo = Ciclo::find($id);
        // $ciclo->inicio = $request->get('inicio');
        // $ciclo->final = $request->get('final');
        // $ciclo->fluxo = $request->get('fluxo');
        // $ciclo->colica = $request->get('colica');
        // $ciclo->dor_cabeca = $request->get('dor_cabeca');
        $ciclo->dor_seios = $request->get('dor_seios');
        $ciclo->save();
        
    }

   
    public function destroy($id)
    {
        Ciclo::destroy($id);
    }
}
