<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\LawsuitTypeRepository;

class LawsuitTypeController extends Controller
{
    protected $lawsuitTypeRepository;

    public function __construct()
    {
        $this->lawsuitTypeRepository = new LawsuitTypeRepository();
    }

    public function index()
    {
        return $this->json($this->lawsuitTypeRepository->lawsuitType());
    }

}
