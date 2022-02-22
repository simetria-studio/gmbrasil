<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('broches')->insert([
            [
                'name' => 'Start',
                'path' => 'assets/img/broches/start.png',
            ],
            [
                'name' => 'Prata',
                'path' => 'assets/img/broches/prata.png',
            ],
            [
                'name' => 'Ouro',
                'path' => 'assets/img/broches/ouro.png',
            ],
            [
                'name' => 'Platina',
                'path' => 'assets/img/broches/platina.png',
            ],
            [
                'name' => 'Esmeralda',
                'path' => 'assets/img/broches/esmeralda.png',
            ],
            [
                'name' => 'Diamante',
                'path' => 'assets/img/broches/diamante.png',
            ],
            [
                'name' => 'Diamante Azul',
                'path' => 'assets/img/broches/diamanteazul.png',
            ],
            [
                'name' => 'Diamante Vermelho',
                'path' => 'assets/img/broches/diamantevermelho.png',
            ],
            [
                'name' => 'Diamante Negro',
                'path' => 'assets/img/broches/diamantenegro.png',
            ],
            [
                'name' => 'Diamante Gold',
                'path' => 'assets/img/broches/golddiamante.png',
            ],

        ]);
    }
}
