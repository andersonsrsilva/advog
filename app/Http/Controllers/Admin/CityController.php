<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function citiesPerState($uf)
    {
        $cities = DB::table('city')
        ->join('uf', 'uf.id', '=', 'city.uf_id')
        ->where('uf.code', $uf)
        ->pluck('city.name', 'city.ibge_code');
        return response()->json($cities, 200);
    }

}
