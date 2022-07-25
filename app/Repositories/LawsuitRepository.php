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

    public function all()
    {
        return parent::findAll($columns='*', $order_by = 'name');
    }

}
