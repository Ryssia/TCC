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
            ["descricao" => "absorvente"],
            ["descricao" => "fluxo"], 
        ];
        DB::table('categorias')->insert($data);

        // DICAS
        $data = [
            ["categoria_id"=>"1", "descricao"=>"ipsum lorem ibdum"],
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
