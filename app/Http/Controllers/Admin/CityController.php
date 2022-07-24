<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CityRepository;

class CityController extends Controller
{
    protected $cityRepository;

    public function __construct()
    {
        $this->cityRepository = new CityRepository();
    }

    public function citiesPerState($uf)
    {
        return $this->json($this->cityRepository->citiesPerState($uf));
    }

}
