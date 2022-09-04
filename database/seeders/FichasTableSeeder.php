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
                    'campo' => 'campo 1',
                    'faixas' => 'faixas 1',
                    'codigo' => 'codigo 1',
                    'objetivos' => 'objetivos 1',
                    'abordagem' => 'abordagem 1',
                    'sugestoes' => 'sugestões 1'
                ],
                [
                    
                    'campo' => 'campo 2',
                    'faixas' => 'faixas 2',
                    'codigo' => 'codigo 2',
                    'objetivos' => 'objetivos 2',
                    'abordagem' => 'abordagem 2',
                    'sugestoes' => 'sugestões 2'
                ]
            ]     
        );
            
    }
}
