@extends('templates/main', ['titulo' => "Dicas", 'link' => "ciclos"])

@section('conteudo')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('/css/card.css')}}" />

<div class="row ">

    <div class="categoria d-flex justify-content-center align-items-center">
        <div class="col col-md-6 offset-md-3 text-center"> 
          @foreach($dica_fluxo as $dica)  
            <div class="col-md-6">
              <div class="card">
                      <div class="additional fluxo">
                        <div class="left-card">
                          <!-- categoria -->
                          <div class="category center">Fluxo</div> 
                          <i class="bi bi-droplet-half center icon"></i>
                        </div>
                      </div>
                      <div class="general d-flex justify-content-center align-items-center">
                        <!-- descricao -->
                        <p>{{ $dica->descricao }}</p>
                      </div>
                    </div>
              </div>
            </div>
          @endforeach

          @foreach($dica_colica as $dica)  
            <div class="col-md-6">
              <div class="card">
                      <div class="additional colica">
                        <div class="left-card">
                          <!-- categoria -->
                          <div class="category center">Cólica</div> 
                          <i class="bi bi-droplet-half center icon"></i>
                        </div>
                      </div>
                      <div class="general d-flex justify-content-center align-items-center">
                        <!-- descricao -->
                        <p>{{ $dica->descricao }}</p>
                      </div>
                    </div>
              </div>
            </div>
          @endforeach

          @foreach($dica_absorvente as $dica)  
            <div class="col-md-6">
              <div class="card">
                      <div class="additional absorvente">
                        <div class="left-card">
                          <!-- categoria -->
                          <div class="category center">Absorventes</div> 
                          <i class="bi bi-droplet-half center icon"></i>
                        </div>
                      </div>
                      <div class="general d-flex justify-content-center align-items-center">
                        <!-- descricao -->
                        <p>{{ $dica->descricao }}</p>
                      </div>
                    </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
</div>

@endsection


