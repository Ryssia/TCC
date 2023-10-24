@extends('templates/main', ['titulo' => "Meus Ciclos", 'link' => "ciclos"])

@section('conteudo')
<div class="row">
    <div class="col col-md-6 offset-md-3 text-center">
    <div class="card">
            <div class="additional">
              <div class="left-card">
                <div class="category center">Fluxo</div>
                <i class="bi bi-droplet-half center icon"></i>
              </div>
              <!-- more-info é o que aparece ao passar o mouse sobre -->
              <div class="more-info">
                <h1>Fluxo Intenso</h1>
                <div class="coords">
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Nihil reprehenderit, quas asperiores debitis sunt placeat
                    quaerat ipsam possimus ut quisquam temporibus unde, fuga
                    explicabo iure sit qui accusamus recusandae sint?
                  </p>
                </div>
              </div>
            </div>
            <div class="general">
              <h1>Fluxo Intenso</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a
                volutpat mauris, at molestie lacus. Nam vestibulum sodales odio
                ut pulvinar.
              </p>
              <span class="more">Mouse over the card for more info</span>
            </div>
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
