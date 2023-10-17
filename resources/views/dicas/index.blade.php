@extends('templates/main', ['titulo' => "Meus Ciclos", 'link' => "ciclos"])

@section('conteudo')
<div class="row">
    <div class="col col-md-6 offset-md-3 text-center">
        <!-- Botões -->
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-secondary" id="btnAbsorventes">Absorventes</button>
            <button type="button" class="btn btn-secondary" id="btnFluxo">Fluxo</button>
            <button type="button" class="btn btn-secondary" id="btnColica">Cólica</button>
        </div>

        <!-- Conteúdo relacionado -->
        <div id="conteudoAbsorventes" style="display: none;">
            <!-- Conteúdo para Absorventes -->
        </div>

        <div id="conteudoFluxo" style="display: none;">
            <!-- Conteúdo para Fluxo -->
        </div>

        <div id="conteudoColica" style="display: none;">
            <!-- Conteúdo para Cólica -->
        </div>
    </div>
</div>

@endsection

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Referências aos elementos HTML
        const btnAbsorventes = document.getElementById("btnAbsorventes");
        const btnFluxo = document.getElementById("btnFluxo");
        const btnColica = document.getElementById("btnColica");
        const conteudoAbsorventes = document.getElementById("conteudoAbsorventes");
        const conteudoFluxo = document.getElementById("conteudoFluxo");
        const conteudoColica = document.getElementById("conteudoColica");

        // Função para mostrar o conteúdo relacionado ao botão clicado
        function mostrarConteudo(id) {
            conteudoAbsorventes.style.display = "none";
            conteudoFluxo.style.display = "none";
            conteudoColica.style.display = "none";

            document.getElementById(id).style.display = "block";
        }

        // Adicionar event listeners para os botões
        btnAbsorventes.addEventListener("click", function () {
            mostrarConteudo("conteudoAbsorventes");
        });

        btnFluxo.addEventListener("click", function () {
            mostrarConteudo("conteudoFluxo");
        });

        btnColica.addEventListener("click", function () {
            mostrarConteudo("conteudoColica");
        });
    });
</script>
