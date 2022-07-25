<?php

namespace App\Repositories;

use App\Models\LegalProceedingAttachedFile;

class LegalProceedingAttachedFileRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new LegalProceedingAttachedFile();
    }

}
