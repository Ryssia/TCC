@extends('templates/auth')

@section('conteudo')

    <div class="row">
        <div class="col d-flex justify-content-center align-items-center" style="height: 75vh;">
            <div class="card w-75 text-center">
                <div class="card-header" style="background-color: #f38ebd;">
                    <span class="text-white fw-bold">Crie sua conta!</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
                    </svg>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="form-floating mb-3" style="width: 80%;">
                                    <input 
                                        type="text" 
                                        class="form-control @if($errors->has('name')) is-invalid @endif" 
                                        name="name" 
                                        placeholder="Nome"
                                        value="{{old('name')}}"
                                    />
                                    <label for="name">Nome</label>
                                    @if($errors->has('name'))
                                        <div class='invalid-feedback'>
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
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
                                <div class="input-group mb-3" style="width: 80%;">
                                    <span class="input-group-text text-white" style="background-color: #f38ebd;">Data de Nascimento</span>
                                    <input type="date" 
                                        class="form-control @if($errors->has('data_nascimento')) is-invalid @endif"
                                        name="data_nascimento" 
                                        value="{{old('data_nascimento')}}" 
                                    />
                                    @if($errors->has('data_nascimento'))
                                        <div class='invalid-feedback'>
                                            {{ $errors->first('data_nascimento') }}
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
                                    <label for="password">Senha</label>
                                    @if($errors->has('password'))
                                        <div class='invalid-feedback'>
                                            {{ $errors->first('password') }}
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
                                        class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" 
                                        name="password_confirmation" 
                                        placeholder="Confirmar Senha"
                                        value="{{old('password')}}"
                                    />
                                    <label for="password_confirmation">Confirmar Senha</label>
                                    @if($errors->has('password_confirmation'))
                                        <div class='invalid-feedback'>
                                            {{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <button type="submit" class="btn text-white" style="background-color: #f38ebd; width: 80%;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                    &nbsp;Inscrever-se
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mt-1">
                        </div>
                        <div class="col-lg-6 col-md-12 mt-1">
                            <a href="/" class="btn text-decoration-none text-white" style="background-color: #f3b3d1; width: 70%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                </svg>
                                &nbsp;Já sou cadastrada
                            </a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection