@extends('templates/main', ['titulo' => "Meus Ciclo", 'link' => "ciclos"])

@section('conteudo')

<div class="row">
    <div class="col col-md-6 offset-md-3 text-center">
        <input type="hidden" id="id_remove">
        <table class="table table-danger align-middle caption-top table-striped text-center">
            <thead>
            <tr>
                <th scope="col">Início</th>
                <th scope="col">Final</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($ciclos as $ciclo)
                <tr>
                    <td>{{ $ciclo->inicio }}</td>
                    <td>{{ $ciclo->final }}</td>
                    <td>
                        <a href="{{ route('ciclos.edit', $ciclo->id) }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.646 2.646a.5.5 0 0 1 .708 0l1 1a.5.5 0 0 1 0 .708L13.354 5.5l-2.708-2.708L12.646 2.646zM4.5 10.793v.707l-2.647.36a.5.5 0 0 1-.593-.592l.36-2.647h.707L11.146 13H4.5v-.707z"/>
                                <path d="M13.354 5.5l-10 10L1 15l10-10 2.354 2.354a.5.5 0 0 1 0 .708l-1 1a.5.5 0 0 1-.708 0L10.5 8.707 8.646 6.854a.5.5 0 0 1 0-.708l1-1a.5.5 0 0 1 .708 0L13.354 5.5z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col text-center">
        <a href="{{ route('ciclos.create') }}" class="btn btn-success">
            Cadastrar Ciclo
        </a>
    </div>
</div>

@endsection