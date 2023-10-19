<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciclo;

class CicloController extends Controller
{
    
    public function index()
    {
        $ciclos = Ciclo::all();
        
       return view('ciclos.index')->with('ciclos', $ciclos);
       //return $ciclos->toJson();
    }

  
    public function create()
    {
    
        return view('ciclos.create');
    }

   
    public function store(Request $request)
    {
            $ciclos = new Ciclo();
            $ciclos->inicio = $request->get('inicio');
            $ciclos->final = $request->get('final');
            $ciclos->fluxo = $request->fluxo;
            $ciclos->colica = $request->get('colica');
            $ciclos->dor_cabeca = $request->get('dor_cabeca');
            $ciclos->dor_seios = $request->get('dor_seios');
            //$ciclos->user_id = $request->user_id; Auth::User()->id;
            //$ciclos->user_id = 1;
            $ciclos->save();
          
            error_log('passou');

            return redirect()->route('ciclos.index'); 
    
    }

    
    public function show($id)
    {
        $ciclo = Ciclo::find($id);
    }

   
    public function edit($id)
    {
        $ciclos = Ciclo::find($id); 
        return view('ciclos.edit')->with('ciclos', $ciclos);

    }

   
    public function update(Request $request, $id)
    {
        $ciclo = Ciclo::find($id);
        $ciclo->inicio = $request->get('inicio');
        $ciclo->final = $request->get('final');
        $ciclo->fluxo = $request->get('fluxo');
        $ciclo->colica = $request->get('colica');
        $ciclo->dor_cabeca = $request->get('dor_cabeca');
        $ciclo->dor_seios = $request->get('dor_seios');
        $ciclo->save();

        return redirect()->route('ciclos.index');
        
    }

   
    public function destroy($id)
    {
        Ciclo::destroy($id);
        return redirect()->route('ciclos.index');
    }
}
