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
                    'competencia' => 'Competência 1',
                    'codigo' => 'Código 1',
                    'descricao' => 'Descricao 1'
                ],
                [
                    'competencia' => 'Competência 2',
                    'codigo' => 'Código 2',
                    'descricao' => 'Descricao 2'
                ]
            ]     
        );
            
    }
}
