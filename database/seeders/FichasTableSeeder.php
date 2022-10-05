<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FichasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fichas')->insert(
            [
                [
                    'campo_id' => '1',
                    'faixa_id' => '1',
                    'codigo' => 'Código 1',
                    'objetivos' => 'Objetivo 1',
                    'abordagem' => 'Abordagem 1',
                    'sugestoes' => 'Sugestões 1',
                    'recurso' => 'Recurso 1',
                    'link_recurso' => 'https://bolachapedagogica.com/luva-do-poema-sou-crianca-sou-assim',
                    'propaganda' => 'Propaganda 1',                    
                    'link_propaganda' => 'https://alfabetinho.com.br/conscienciafonologica?ref=N60731758R'
                ]
            ]     
        );
            
    }
}
