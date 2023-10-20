
@extends('templates/main', ['titulo' => "Dashboard", 'link' => "home"])

@section('conteudo')

    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <div id="piechartA" style="width: 480px; height: 320px;"></div>
        </div>
        <div class="col d-flex justify-content-center align-items-center">
            <div id="piechartB" style="width: 480px; height: 320px;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <div id="piechartC" style="width: 480px; height: 320px;"></div>
        </div>
        <div class="col d-flex justify-content-center align-items-center">
            <div id="piechartD" style="width: 480px; height: 320px;"></div>
        </div>
    </div>
    <br>
@endsection

@section('script')

    <script type="text/javascript">
        
        let sintomas = <?php echo $sintomas ?>;
        let datas = <?php echo $datas ?>;
        // sintomas.length;
        
        let inicio = datas[0].inicio.substring(8, 10) + "/" + datas[0].inicio.substring(5, 7) + "/" + datas[0].inicio.substring(0, 4)
        let final = datas[5].final.substring(8, 10) + "/" + datas[5].final.substring(5, 7) + "/" + datas[5].final.substring(0, 4)
        let niveis = [0, 1, 2, 3, 4];
        let niveisA = ['Muito Leve', 'Leve', 'Moderado', 'Intenso', 'Muito Intenso'];
        let niveisB = ['Nenhuma', 'Fraca', 'Moderada', 'Forte', 'Muito Forte'];
        let fluxos = new Array();
        let colicas = new Array();
        let dores_cabeca = new Array();
        let dores_seios = new Array();
        let nenhuma, fraca, moderada, forte, muito_forte;
        nenhuma = fraca = moderada = forte = muito_forte = 0;
        
        sintomas.forEach(element => {
            fluxos.push(element.fluxo)
            colicas.push(element.colica)
            dores_cabeca.push(element.dor_cabeca)
            dores_seios.push(element.dor_seios)

            if(element.dor_cabeca == 0) { nenhuma++; }
            if(element.dor_cabeca == 1) { fraca++; }
            if(element.dor_cabeca == 2) { moderada++; }
            if(element.dor_cabeca == 3) { forte++; }
            if(element.dor_cabeca == 4) { muito_forte++; }
        });

        // alert(dores_seios)

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            // FLUXO
            // Dados do Gráfico
            let data = google.visualization.arrayToDataTable([
                ['Intensidade', 'Fluxo'],
                [niveisA[fluxos[0]], fluxos[0]], [niveisA[fluxos[1]], fluxos[1]],
                [niveisA[fluxos[2]], fluxos[2]], [niveisA[fluxos[3]], fluxos[3]],
                [niveisA[fluxos[4]], fluxos[4]], [niveisA[fluxos[5]], fluxos[5]],
            ]);

            // Opções de Configuração
            let options = {
                title: 'Fluxos Menstruais: ' + inicio + ' - ' + final,
                hAxis: {
                    title: 'Fluxo',
                    titleTextStyle: { bold:'true'},
                },
                vAxis: {
                    title: 'Intensidade',
                    titleTextStyle: { bold:'true'},
                },
                colors: ['#f38ebd'],
                legend: 'none'
            };

            // DESENHA GRÁFICO DE LINHAS - FLUXO
            let chart = new google.visualization.LineChart(document.getElementById('piechartA'));
            chart.draw(data, options);
            
            // ============================================= //

            // CÓLICA
            // Dados do Gráfico
            data = google.visualization.arrayToDataTable([
                ['Intensidade', 'Cólica'],
                [niveisB[colicas[0]], colicas[0]],
                [niveisB[colicas[1]], colicas[1]],
                [niveisB[colicas[2]], colicas[2]], 
                [niveisB[colicas[3]], colicas[3]],
                [niveisB[colicas[4]], colicas[4]],
                [niveisB[colicas[5]], colicas[5]]
            ]);

            // Opções de Configuração
            options = {
                title: 'Cólicas Menstruais: ' + inicio + ' - ' + final,
                colors: ['#f38ebd'],
                hAxis: {
                    title: 'Cólica',
                },
                vAxis: {
                    title: 'Intensidade'
                },
            };

            // DESENHA GRÁFICO DE BARRAS - CÓLICA
            chart = new google.visualization.BarChart(document.getElementById('piechartB'));
            chart.draw(data, options);
            
            // ============================================= //

            // DOR DE CABEÇA
            // Dados do Gráfico
            data = google.visualization.arrayToDataTable([
                ['Intensidade', 'Dor de Cabeça'],
                ["Nenhuma", nenhuma],
                ["Fraca", fraca],
                ["Modearada", moderada], 
                ["Forte", forte],
                ["Muito Forte", muito_forte],
            ]);

            // Opções de Configuração
            options = {
                title: 'Dores de Cabeça: ' + inicio + ' - ' + final,
                colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6'],
                is3D: true
            };

            // DESENHA GRÁFICO DE PIZZA - DOR DE CABEÇA
            chart = new google.visualization.PieChart(document.getElementById('piechartC'));
            chart.draw(data, options);
            

            // ============================================= //

            // DOR NO SEIO
            // Dados do Gráfico
            data = google.visualization.arrayToDataTable([
                ['Intensidade', 'Dor nos Seios'],
                [niveisB[dores_seios[0]], dores_seios[0]],
                [niveisB[dores_seios[1]], dores_seios[1]],
                [niveisB[dores_seios[2]], dores_seios[2]], 
                [niveisB[dores_seios[3]], dores_seios[3]],
                [niveisB[dores_seios[4]], dores_seios[4]],
                [niveisB[dores_seios[5]], dores_seios[5]]
            ]);

            // Opções de Configuração
            options = {
                title: 'Dores nos Seios: ' + inicio + ' - ' + final,
                colors: ['#f38ebd'],
                hAxis: {
                    title: 'Dor nos Seios',
                },
                vAxis: {
                    title: 'Intensidade',
                }
            };

            // DESENHA GRÁFICO DE COLUNAS - DOR NO SEIO
            chart = new google.visualization.ColumnChart(document.getElementById('piechartD'));
            chart.draw(data, options);
        }
                
    </script>

@endsection
