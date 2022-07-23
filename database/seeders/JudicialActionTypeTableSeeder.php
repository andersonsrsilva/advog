<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudicialActionTypeTableSeeder extends Seeder
{
    static $values = [
        'CONTESTAÇÃO',
        'PEDIDO INICIAL',
        'RECURSO'
    ];

    public function run()
    {
        foreach (self::$values as $value) {
            DB::table('lawsuit_type_action')->insert([
                'name' => $value
            ]);
        }
    }
}
