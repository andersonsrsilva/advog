<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\LawsuitRepository;

class LawsuitController extends Controller
{
    protected $lawsuitRepository;

    public function __construct()
    {
        $this->lawsuitRepository = new LawsuitRepository();
    }

    public function index()
    {
        return $this->json($this->lawsuitRepository->lawsuit());
    }

}
