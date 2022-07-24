<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LawsuitTableSeeder extends Seeder
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
            DB::table('legal-proceeding')->insert([
                'name' => $value
            ]);
        }
    }
}
