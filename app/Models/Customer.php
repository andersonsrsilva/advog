<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $table = 'customer';

    protected $fillable = [
        'id',
        'name',
        'email',
        'cpf',
        'cnh',
        'passport',
        'home_phone',
        'mobile_phone',
        'zip_code',
        'address',
        'number_address',
        'other_address',
        'district_address',
        'city_id',
        'uf_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function legalProceedings()
    {
        return $this->belongsToMany(LegalProceeding::class, 'legal_proceeding_customers');
    }

    public function getCpfFormatedAttribute()
    {
        $p1 = substr($this->cpf, 0,3);
        $p2 = substr($this->cpf, 3,3);
        $p3 = substr($this->cpf, 6,3);
        $p4 = substr($this->cpf, -2);
        return $p1.".".$p2.".".$p3."-".$p4;
    }

}
