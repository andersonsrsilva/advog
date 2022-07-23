<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudicialActionTableSeeder extends Seeder
{
    static $values = [
        'CÍVIL',
        'CRIMINAL',
        'IMOBILIARIO',
        'PROCESSO ADM MILITAR',
        'TRABALHISTA',
        'PREVIDENCIÁRIO',
        'TRIBUTÁRIO'
    ];

    public function run()
    {
        foreach (self::$values as $value) {
            DB::table('lawsuit_action')->insert([
                'name' => $value
            ]);
        }
    }
}
