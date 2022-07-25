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

    public function all()
    {
        return parent::findAll($columns='*', $order_by = 'name');
    }

}
