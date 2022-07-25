<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalProceedingAttachedFile extends Model
{
    protected $table = 'legal_proceeding_attached_file';

    protected $fillable = [
        'legal_proceeding_id',
        'name',
        'extension',
    ];

    public function legalProceeding()
    {
        return $this->belongsTo(LegalProceeding::class);
    }

}
