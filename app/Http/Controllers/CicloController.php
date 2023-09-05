<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CicloController extends Controller
{
    
    public function index()
    {
        $ciclos = Ciclo::all();
        
       // return view('ciclos.index')->with('ciclos', $ciclos)
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
            $ciclos->dor_seio = $request->get('dor_seios');
            $sintomas->save();
            

            return redirect()->route('ciclos.index');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
