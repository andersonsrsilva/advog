<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
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

    public function getCpfAttribute($value)
    {
        $one = substr($value, 0,3);
        $two = substr($value, 3,3);
        $tree = substr($value, 6,3);
        $four = substr($value, -2);
        return $one.".".$two.".".$tree."-".$four;
    }

}
