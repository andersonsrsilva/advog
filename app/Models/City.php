<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    public $timestamps = false;

    protected $fillable = ['uf_id', 'ibge_code', 'name'];

    public function uf()
    {
        return $this->belongsTo(Uf::class);
    }

    public function Customers()
    {
        return $this->hasMany(Customer::class);
    }

}
