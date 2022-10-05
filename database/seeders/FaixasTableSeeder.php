<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaixasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faixas')->insert(
            [
                [
                    'id' => '1',
                    'descricao' => 'Faixa 1'                    
                ]
            ]     
        );
    }
}
