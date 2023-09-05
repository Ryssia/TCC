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
        
        $data = [
            ["descricao" => "absorvente"],
            ["descricao" => "fluxo"],
           
        ];
        DB::table('categorias')->insert($data);

        $data = [
            
            ["categoria_id"=>"1", "descricao"=>"ipsum lorem ibdum"],
        ];
        DB::table('dicas')->insert($data);

        $data = [
            [
                "name" => "Ryssia", 
                "email" => "ryssia@teste.com", 
                "password" => Hash::make('teste'), 
                "data_nascimento" => "2012-12-12"
            ],

            ["name" => "Diana", "email" => "diana@teste.com", "password" => Hash::make('teste'), "data_nascimento" => "2014-12-12"],
            
        ];
        DB::table('users')->insert($data);

        $data = [
            
            ["id"=>"1", "inicio" => "2023-09-01", "final" => "2023-09-04", "fluxo"=> "2", "colica" => "2", "dor_cabeca"=>"2", "dor_seios"=>"2", "user_id"=>"1"],
        ];
        DB::table('ciclos')->insert($data);


    }
}
