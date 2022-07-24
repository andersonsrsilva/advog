<?php

namespace App\Repositories;

use App\Models\LawsuitType;
use Illuminate\Support\Facades\DB;

class LawsuitTypeRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new LawsuitType();
    }

    public function lawsuitType()
    {
        $lawsuitTypes = DB::table('lawsuit_type')
            ->orderBy('name')
            ->pluck('lawsuit_type.name', 'lawsuit_type.id');
        return $lawsuitTypes;
    }

}
