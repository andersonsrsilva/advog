<?php

namespace App\Repositories;

use App\Models\LegalProceeding;

class LegalProceedingRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new LegalProceeding();
    }

}
