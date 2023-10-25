@extends('templates/main', ['titulo' => "Meus Ciclos", 'link' => "ciclos"])

@section('conteudo')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('/css/card.css')}}" />

<div class="row ">

    <div class="categoria d-flex justify-content-center align-items-center">
        <div class="col col-md-6 offset-md-3 text-center">    
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
                    <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur eaque eligendi, rem ad libero eos debitis porro labore reiciendis distinctio nulla laudantium ex nesciunt voluptatibus? Dolor voluptatum aliquam modi eligendi!
                    </p>
                  
                  </div>
                </div>
          </div>
        </div>
    </div>
</div>

@endsection


