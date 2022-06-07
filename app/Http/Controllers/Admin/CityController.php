<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function citiesPerState($value)
    {
        $cities = DB::table('city')->where('uf_id', $value)->pluck('name', 'id');
        return response()->json($cities, 200);
    } 

}
