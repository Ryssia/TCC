@extends('templates/main', ['titulo' => "Cadastrar Novo Ciclo", 'link' => "ciclos"])

@section('conteudo')


<form method="POST" action="{{route('ciclos.store')}}"> 
    @csrf
    <input type="hidden" name="fluxo" id="fluxo" value="2"/>
    <input type="hidden" name="colica" id="colica" value="2"/>
    <input type="hidden" name="dor_cabeca" id="dor_cabeca" value="2"/>
    <input type="hidden" name="dor_seios" id="dor_seios" value="2"/>
    
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="card w-75 text-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div class="input-group mb-3" style="width: 80%;">
                                <span class="input-group-text text-white" style="background-color: #f38ebd;">Início</span>
                                <input type="date" 
                                    class="form-control @if($errors->has('inicio')) is-invalid @endif"
                                    name="inicio" 
                                    value="{{old('inicio')}}" 
                                    style="color:#f38ebd"
                                />
                                @if($errors->has('inicio'))
                                    <div class='invalid-feedback'>
                                        {{ $errors->first('inicio') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div class="input-group mb-3" style="width: 80%;">
                                <span class="input-group-text text-white" style="background-color: #f38ebd;">Final</span>
                                <input type="date" 
                                    class="form-control @if($errors->has('final')) is-invalid @endif"
                                    name="final" 
                                    value="{{old('final')}}" 
                                    style="color:#f38ebd"
                                />
                                @if($errors->has('final'))
                                    <div class='invalid-feedback'>
                                        {{ $errors->first('final') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="card w-75 text-center">
                <div class="card-body">
                    <div class="mb-2 d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#f38ebd" class="bi bi-droplet-fill" viewBox="0 0 16 16">
                            <path d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z"/>
                        </svg>
                        <span class="fs-5 fw-bold ms-2" style="color:#f38ebd;">Fluxo</span>
                    </div>
                    <div class="range">
                        <input type="range" class="form-range" min="0" max="4" oninput="this.nextElementSibling.value = getFlow(this.value)"  />
                        <output class="fw-bold" style="color:#a19d9f;">Moderado</output>
                    </div>
                    <hr>
                    <div class="mb-2 d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#f38ebd" class="bi bi-thermometer-snow" viewBox="0 0 16 16">
                            <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V9.5a.5.5 0 0 1 1 0v1.585A1.5 1.5 0 0 1 5 12.5z"/>
                            <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1.293l.646-.647a.5.5 0 0 1 .708.708L9 5.207v1.927l1.669-.963.495-1.85a.5.5 0 1 1 .966.26l-.237.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.884.237a.5.5 0 1 1-.26.966l-1.848-.495L9.5 8l1.669.963 1.849-.495a.5.5 0 1 1 .258.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.237.883a.5.5 0 1 1-.966.258L10.67 9.83 9 8.866v1.927l1.354 1.353a.5.5 0 0 1-.708.708L9 12.207V13.5a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        <span class="fs-5 fw-bold ms-2" style="color:#f38ebd;">Cólica</span>
                    </div>
                    <div class="range">
                        <input type="range" class="form-range" min="0" max="4" oninput="this.nextElementSibling.value = getColic(this.value)" />
                        <output class="fw-bold" style="color:#a19d9f;">Moderada</output>
                    </div>
                    <hr>
                    <div class="mb-2 d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#f38ebd" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                        </svg>
                        <span class="fs-5 fw-bold ms-2" style="color:#f38ebd;">Dor de Cabeça</span>
                    </div>
                    <div class="range">
                        <input type="range" class="form-range" min="0" max="4" oninput="this.nextElementSibling.value = getPainHead(this.value)" />
                        <output class="fw-bold" style="color:#a19d9f;">Moderada</output>
                    </div>
                    <div class="mb-2 d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#f38ebd" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                        </svg>
                        <span class="fs-5 fw-bold ms-2" style="color:#f38ebd;">Dor nos Seios</span>
                    </div>
                    <div class="range">
                        <input type="range" class="form-range" min="0" max="4" oninput="this.nextElementSibling.value = getBreastPain(this.value)" />
                        <output class="fw-bold" style="color:#a19d9f;">Moderada</output>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="card w-75 text-center">
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col">
                            <a href="{{ route('ciclos.index') }}" class="btn text-white" style="background-color: #9fa1f8; width: 90%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path d="M6.293 4.293a1 1 0 0 1 1.414 0L12 7.586V6a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V8.414l4.293 4.293a1 1 0 0 1-1.414 1.414l-6-6a1 1 0 0 1 0-1.414l6-6a1 1 0 0 1 1.414 1.414z"/>
                                </svg>
                                &nbsp;Voltar
                            </a>
                        </div>
                        <div class="col">
                            <button class="btn text-white" style="background-color: #9fa1f8; width: 90%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                                &nbsp;Cadastrar Ciclo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection



@section('script')

    <script type="text/javascript">

        function getFlow(val) {
            document.getElementById("fluxo").value = val;
            return ["Muito Leve", "Leve", "Moderado", "Intenso", "Muito Intenso"][val];
            
        }

        function getColic(val) {
            document.getElementById("colica").value = val;
            return ["Nenhuma", "Fraca", "Moderada", "Forte", "Muito Forte"][val];
        }

        function getPainHead(val) {
            document.getElementById("dor_cabeca").value = val;
            return ["Nenhuma", "Fraca", "Moderada", "Forte", "Muito Forte"][val];
        }

        function getBreastPain(val) {
            document.getElementById("dor_seios").value = val;
            return ["Nenhuma", "Fraca", "Moderada", "Forte", "Muito Forte"][val];
        }

    </script>

@endsection