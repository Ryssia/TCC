<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // CARTEGORIAS
        $data = [
            ["descricao" => "fluxo"], 
            ["descricao" => "colica"],
            ["descricao" => "dor_cabeca"],
            ["descricao" => "dor_seios"],
            ["descricao" => "absorvente"],
        ];
        DB::table('categorias')->insert($data);

        // DICAS
        $data = [
            ["categoria_id"=>"5", "notificacao"=> false, "descricao"=>"Absorventes Descartáveis: São os absorventes mais comuns e encontrados em mercados e farmácias. Eles são descartados após o uso, o que os torna convenientes. Existem absorventes para fluxo leve, médio e intenso."],
            ["categoria_id"=>"5", "notificacao"=> false, "descricao"=>"O que é um Absorvente?
            Um absorvente é um produto de higiene feminina que é usado para absorver o fluxo menstrual durante o período. Ele é feito de materiais absorventes e é colocado na calcinha e ajuda a manter te seca e confortável."],
            ["categoria_id"=>"5", "notificacao"=> false, "descricao"=>"Escolher o Tamanho Correto: Dependendo da quantidade de fluxo o tamanho do absorvente pode mudar, absorventes menores são projetados para fluxo leve a médio, já absorventes grandes e noturnos são mais indicados para fluxos intensos e uso noturno"],
            ["categoria_id"=>"5", "notificacao"=> false, "descricao"=>"Absorventes Reutilizáveis: Alguns absorventes reutilizáveis são feitos de tecido e podem ser lavados e usados novamente. Eles são uma opção mais sustentável e ajudam o meio ambiente, devido a minimizar a produção de lixo."],
            ["categoria_id"=>"1", "notificacao"=> false, "descricao"=>"O Que é o Fluxo Menstrual?
            O fluxo menstrual é o nome dado ao sangue que sai do útero da mulher durante este período. Este sangramento é uma parte normal do ciclo menstrual, normalmente dura de 3 a 7 dias."],
            ["categoria_id"=>"2", "notificacao"=> false, "descricao"=>"A menstruação ocorre se o óvulo que foi liberado durante o ciclo menstrual não for fertilizado, assim o corpo o expulsa, juntamente com revestimento do útero, o que causa o sangramento."],
            ["categoria_id"=>"1", "notificacao"=> true, "descricao"=>"Sempre carregue alguns absorventes extras na bolsa para emergências."],
            ["categoria_id"=>"2", "notificacao"=> true, "descricao"=>"Se a cólica estiver muito intensa, com a ajuda de um adulto, pode fazer uma compressa quente, apoiando abaixo do umbigo!"],
            ["categoria_id"=>"3", "notificacao"=> true, "descricao"=>"Dores de cabeça intensas, podem ser sintomas da TPM. Se a dor estiver muito intensa e muito frequente, seria bom marcar uma consulta médica!"],
            ["categoria_id"=>"4", "notificacao"=> true, "descricao"=>"Essa sensibilidade e dor nos seios, é um sintoma da TPM. Um sutiã que forneça uma boa sustentação ajuda a minimizar a dor. Banhos quentinhos também!"],
            ["categoria_id"=>"4", "notificacao"=> false, "descricao"=>"A sensibilidade nos seios durante o ciclo menstrual é causada pela alterações nos níveis hormonais, o que pode causar um inchaço."],
            ["categoria_id"=>"3", "notificacao"=> false, "descricao"=>"A dor de cabeça durante o ciclo menstrual pode ser causada por tensão, alterações de hormonios, má alimentação e até mesmo retenção de liquidos."],
            ["categoria_id"=>"1", "notificacao"=> false, "descricao"=>"O fluxo menstrual pode variar de leve a intenso. Algumas mulheres têm fluxos mais intensos, enquanto outras têm fluxos mais leves."],
            ["categoria_id"=>"2", "notificacao"=> false, "descricao"=>"As cólicas menstruais são causadas principalmente pelas contrações do útero para expelir o revestimento uterino (endométrio)."],

        ];
        DB::table('dicas')->insert($data);

        // USUÁRIOS
        $data = [
            ["name" => "Ryssia", "email" => "ryssia@teste.com", "password" => Hash::make('teste'), "data_nascimento" => "2012-12-12"],
            ["name" => "Diana", "email" => "diana@teste.com", "password" => Hash::make('teste'), "data_nascimento" => "2014-12-12"],    
        ];
        DB::table('users')->insert($data);

        // CICLOS
        $data = [
            [
                "inicio" => "2023-01-10", 
                "final" => "2023-01-18", 
                "fluxo"=> "2", 
                "colica" => "2", 
                "dor_cabeca"=>"2", 
                "dor_seios"=>"2", 
                "user_id"=>"1"
            ],
            [
                "inicio" => "2023-02-14", 
                "final" => "2023-02-20", 
                "fluxo"=> "4", 
                "colica" => "1", 
                "dor_cabeca"=>"3", 
                "dor_seios"=>"3", 
                "user_id"=>"1"
            ],
            [
                "inicio" => "2023-03-12", 
                "final" => "2023-03-19", 
                "fluxo"=> "3", 
                "colica" => "0", 
                "dor_cabeca"=>"1", 
                "dor_seios"=>"2", 
                "user_id"=>"1"
            ],
            [
                "inicio" => "2023-04-17", 
                "final" => "2023-04-21", 
                "fluxo"=> "4", 
                "colica" => "4", 
                "dor_cabeca"=>"2", 
                "dor_seios"=>"3", 
                "user_id"=>"1"
            ],
            [
                "inicio" => "2023-05-12", 
                "final" => "2023-05-19", 
                "fluxo"=> "1", 
                "colica" => "3", 
                "dor_cabeca"=>"2", 
                "dor_seios"=>"0", 
                "user_id"=>"1"
            ],
            [
                "inicio" => "2023-06-19", 
                "final" => "2023-06-27", 
                "fluxo"=> "0", 
                "colica" => "1", 
                "dor_cabeca"=>"4", 
                "dor_seios"=>"2", 
                "user_id"=>"1"
            ],
        ];
        DB::table('ciclos')->insert($data);


    }
}
