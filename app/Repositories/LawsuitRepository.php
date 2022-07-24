<?php

namespace App\Repositories;

use App\Models\Lawsuit;
use Illuminate\Support\Facades\DB;

class LawsuitRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Lawsuit();
    }

    public function lawsuit()
    {
        $lawsuits = DB::table('legal-proceeding')
            ->orderBy('name')
            ->pluck('legal-proceeding.name', 'legal-proceeding.id');
        return $lawsuits;
    }

}
