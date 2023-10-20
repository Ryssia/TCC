<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $ciclos->fluxo = intval($request->fluxo);
        $ciclos->colica = intval($request->colica);
        $ciclos->dor_cabeca = intval($request->dor_cabeca);
        $ciclos->dor_seios = intval($request->dor_seios);
        $ciclos->user_id = Auth::User()->id;
        // $ciclos->user_id = 1;
        $ciclos->save();
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

        // dd($request);
        $ciclo = Ciclo::find($id);
        $ciclo->inicio = $request->inicio;
        $ciclo->final = $request->final;
        $ciclo->fluxo = intval($request->fluxo);
        $ciclo->colica = intval($request->colica);
        $ciclo->dor_cabeca = intval($request->dor_cabeca);
        $ciclo->dor_seios = intval($request->dor_seios);
        $ciclo->save();

        return redirect()->route('ciclos.index');
        
    }
   
    public function destroy($id)
    {
        Ciclo::destroy($id);
        return redirect()->route('ciclos.index');
    }

    public function dashboard() {

        $datas = Ciclo::select(['inicio', 'final'])->take(6)->get()->toJson();

        $sintomas = Ciclo::select(['fluxo', 'colica', 'dor_cabeca', 'dor_seios'])
                ->take(6)->get()->toJson();
        
        // return $datas;
        return view('testehome', compact('datas', 'sintomas'));

    }
}
