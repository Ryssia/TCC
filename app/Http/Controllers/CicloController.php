<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Dica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CicloController extends Controller
{
    public function index($flag = 0)
    {
        $ciclos = Ciclo::all(); 
        return view('ciclos.index')->with('ciclos', $ciclos)->with('flag', $flag);
       //return $ciclos->toJson();
    }

    public function list($flag = 0)
    {
        $text = "";
        if($flag != 0) { 
            $text = Dica::where('categoria_id', $flag)->where('notificacao', 1)->first()->descricao;
            //dd($text);
        }

        $ciclos = Ciclo::all(); 
        return view('ciclos.index')->with('ciclos', $ciclos)
            ->with('flag', $flag)
            ->with('text', $text);
        //return $ciclos->toJson();
    }
    
    public function create()
    {
        return view('ciclos.create');
    }
   
    public function store(Request $request)
    {
        $flag = 0;
        $ciclos = new Ciclo();
        $ciclos->inicio = $request->get('inicio');
        $ciclos->final = $request->get('final');
        $ciclos->fluxo = intval($request->fluxo);
        $ciclos->colica = intval($request->colica);
        $ciclos->dor_cabeca = intval($request->dor_cabeca);
        $ciclos->dor_seios = intval($request->dor_seios);
        $ciclos->user_id = Auth::User()->id;
        // $ciclos->user_id = 1;
        
        if($ciclos->fluxo == 4) { $flag = 1; }
        if($ciclos->colica == 4) { $flag = 2; }
        if($ciclos->dor_cabeca == 4) { $flag = 3; }
        if($ciclos->dor_seios == 4) { $flag = 4; }
        
        $ciclos->save();

        return redirect()->route('ciclo.list', $flag);
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
        $flag = 0;

        $ciclo = Ciclo::find($id);
        $ciclo->inicio = $request->inicio;
        $ciclo->final = $request->final;
        $ciclo->fluxo = intval($request->fluxo);
        $ciclo->colica = intval($request->colica);
        $ciclo->dor_cabeca = intval($request->dor_cabeca);
        $ciclo->dor_seios = intval($request->dor_seios);

        if($ciclo->fluxo == 4) { $flag = 1; }
        if($ciclo->colica == 4) { $flag = 2; }
        if($ciclo->dor_cabeca == 4) { $flag = 3; }
        if($ciclo->dor_seios == 4) { $flag = 4; }

        $ciclo->save();

        return redirect()->route('ciclo.list', $flag);
        //return redirect()->route('ciclos.index', $flag);
        
    }
   
    public function destroy($id)
    {
        Ciclo::destroy($id);
        return redirect()->route('ciclos.index');
    }

    public function dashboard() {

        $datas = Ciclo::select(['inicio', 'final'])->whereRaw('final is not null')->take(6)->get()->toJson();
        
        $count = count(Ciclo::select(['inicio', 'final'])->whereRaw('final is null')->get());

        $sintomas = Ciclo::select(['fluxo', 'colica', 'dor_cabeca', 'dor_seios'])
                ->take(6)->get()->toJson();
        
        //return $datas;
        return view('testehome', compact('datas', 'sintomas', 'count'));

    }
}
