@extends('templates/main', ['titulo' => "Dicas", 'link' => "ciclos"])

@section('conteudo')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('/css/card.css')}}" />

<div class="container">
      <div class="row ">    
        <!-- CARD DE FLUXO -->
          <div class="categoria d-flex flex-column flex-lg-row flex-wrap justify-content-center align-items-center"> 
            @foreach($dica_fluxo as $dica)  
              @if($dica->notificacao == 0) 
                <div class="card col-lg-4 col-12 ">
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
              @endif                 
            @endforeach
          </div>    
          
          <!-- CARD DE CÓLICA -->
          <div class="categoria d-flex flex-column flex-lg-row flex-wrap justify-content-center align-items-center"> 
            @foreach($dica_colica as $dica)  
              @if($dica->notificacao == 0)
                <div class="card col-lg-4 col-12 ">
                        <div class="additional colica">
                          <div class="left-card">
                            <!-- categoria -->
                            <div class="category center">Colica</div> 
                            <i class="bi bi-lightning-fill center icon"></i>
                          </div>
                        </div>
                        <div class="general d-flex justify-content-center align-items-center">
                          <!-- descricao -->
                          <p>{{ $dica->descricao }}</p>
                        </div>
                </div> 
               @endif                      
            @endforeach
          </div>    

          <!-- CARD DE ABSORVENTE -->
          <div class="categoria d-flex flex-column flex-lg-row flex-wrap justify-content-center align-items-center"> 
            @foreach($dica_absorvente as $dica)  
              @if($dica->notificacao == 0)  
                <div class="card col-lg-4 col-12 ">
                        <div class="additional absorvente">
                          <div class="left-card">
                            <!-- categoria -->
                            <div class="category center">Absorvente</div> 
                            <i class="bi bi-postage-heart center icon"></i>
                          </div>
                        </div>
                        <div class="general d-flex justify-content-center align-items-center">
                          <!-- descricao -->
                          <p>{{ $dica->descricao }}</p>
                        </div>
                </div> 
              @endif                    
            @endforeach
          </div>  
          
          <!-- CARD DE DORES -->
          <div class="categoria d-flex flex-column flex-lg-row flex-wrap justify-content-center align-items-center"> 
            @foreach($dica_absorvente as $dica)  
              @if($dica->notificacao == 0)  
                <div class="card col-lg-4 col-12 ">
                        <div class="additional absorvente">
                          <div class="left-card">
                            <!-- categoria -->
                            <div class="category center">Absorvente</div> 
                            <i class="bi bi-postage-heart center icon"></i>
                          </div>
                        </div>
                        <div class="general d-flex justify-content-center align-items-center">
                          <!-- descricao -->
                          <p>{{ $dica->descricao }}</p>
                        </div>
                </div> 
              @endif                    
            @endforeach
          </div>
      </div>
</div>

@endsection


