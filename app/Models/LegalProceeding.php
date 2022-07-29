<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LegalProceeding extends Model
{
    use SoftDeletes;

    protected $table = 'legal_proceeding';

    protected $fillable = [
        'name',
        'lawsuit_id',
        'lawsuit_type_id',
        'legal_address_1',
        'legal_address_2',
        'uf_id',
        'lawsuit_description',
        'defendant_description',
        'preliminary_description',
        'fact_description',
        'right_description',
        'order_description',
        'value_lawsuit',
        'number_lawsuit',
        'local_lawsuit'
    ];

    public function lawsuit()
    {
        return $this->belongsTo(Lawsuit::class);
    }

    public function lawsuitType()
    {
        return $this->belongsTo(LawsuitType::class);
    }

    public function uf()
    {
        return $this->belongsTo(Uf::class);
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function files()
    {
        return $this->hasMany(LegalProceedingAttachedFile::class);
    }

}
