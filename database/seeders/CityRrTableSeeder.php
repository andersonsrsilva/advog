<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityRrTableSeeder extends Seeder
{
    static array $values = [
        "1400027" => "AMAJARI",
        "1400050" => "ALTO ALEGRE",
        "1400100" => "BOA VISTA",
        "1400159" => "BONFIM",
        "1400175" => "CANTA",
        "1400209" => "CARACARAI",
        "1400233" => "CAROEBE",
        "1400282" => "IRACEMA",
        "1400308" => "MUCAJAI",
        "1400407" => "NORMANDIA",
        "1400456" => "PACARAIMA",
        "1400472" => "RORAINOPOLIS",
        "1400506" => "SAO JOAO DA BALIZA",
        "1400605" => "SAO LUIZ",
        "1400704" => "UIRAMUTA"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '23'
            ]);
        }
    }
}
