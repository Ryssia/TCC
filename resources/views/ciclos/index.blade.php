@extends('templates/main', ['titulo' => "Meus Ciclos", 'link' => "ciclos"])

@section('conteudo')

<div class="row">
    <div class="col col-md-6 offset-md-3 text-center">
        <input type="hidden" id="id_remove">
        <table class="table align-middle caption-top text-center">
            <thead>
            <tr>
                <th scope="col" class="fs-5 fw-bold" style="color:#f38ebd;">Início</th>
                <th scope="col" class="fs-5 fw-bold" style="color:#f38ebd;">Final</th>
                <th scope="col" class="fs-5 fw-bold" style="color:#f38ebd;"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($ciclos as $ciclo)
                    @if($ciclo->user_id === Auth::id()) 
                        <tr>
                            <td class="fs-5" style="color:#f38ebd;">{{ date('d-m-Y', strtotime($ciclo->inicio)) }}</td>
                            <td class="fs-5" style="color:#f38ebd;">{{ date('d-m-Y', strtotime($ciclo->final)) }}</td>
                            <td>
                                <a href="{{ route('ciclos.edit', $ciclo->id) }}" class="btn text-white" style="background-color: #f38ebd;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFF" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- <div class="row">
    <div class="col text-center">
        <a href="{{ route('ciclos.create') }}" class="btn btn-success" style="background-color: #9fa1f8; outline:none;">
            Cadastrar Novo Ciclo
        </a>
    </div>
</div> -->

<div class="row d-flex justify-content-center">
    <a href="{{ route('ciclos.create') }}" class="btn text-white" style="background-color: #f38ebd; width: 40%;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" fill="#FFF" class="bi bi-calendar-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 14V4h14v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Zm7-6.507c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
        </svg>
        &nbsp;Cadastrar Novo Ciclo
    </a>
</div>

@endsection