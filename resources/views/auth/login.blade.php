@extends('templates/auth')

@section('conteudo')

    <div class="row">
        <div class="col d-flex justify-content-center align-items-center" style="height: 75vh;">
            <div class="card w-75 text-center" >
                <div class="card-header" style="background-color: #f38ebd;">
                    <span class="text-white fw-bold">Olá! Seja Bem Vinda!</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
                    </svg>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="form-floating mb-3" style="width: 80%;">
                                    <input 
                                        type="text" 
                                        class="form-control @if($errors->has('email')) is-invalid @endif" 
                                        name="email" 
                                        placeholder="E-mail"
                                        value="{{old('email')}}"
                                    />
                                    <label for="email">E-mail</label>
                                    @if($errors->has('email'))
                                        <div class='invalid-feedback'>
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="form-floating mb-3" style="width: 80%;">
                                    <input 
                                        type="password" 
                                        class="form-control @if($errors->has('password')) is-invalid @endif" 
                                        name="password" 
                                        placeholder="Senha"
                                        value="{{old('password')}}"
                                    />
                                    <label for="password">Senha</label>  <!--mexi aqui, onde ta password eatava escrito Email-->
                                    @if($errors->has('password'))
                                        <div class='invalid-feedback'>
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <button type="submit" class="btn text-white" style="background-color: #f38ebd; width: 80%;">
                                    <!-- <a href="" class="btn text-white" style="background-color: #f38ebd; width: 80%;"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                            <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                                        </svg>
                                        &nbsp;Login
                                    <!-- </a> -->
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mt-1">
                            <a href="{{route('register')}}" class="btn text-decoration-none text-white" style="background-color: #9fa1f8; width: 70%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                &nbsp;Cadastrar
                            </a>    
                        </div>
                        <div class="col-lg-6 col-md-12 mt-1">
                            <a href="#" class="btn text-decoration-none text-white" style="background-color: #f3b3d1; width: 70%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-key-fill" viewBox="0 0 16 16">
                                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                &nbsp;Recuperar Senha
                            </a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection