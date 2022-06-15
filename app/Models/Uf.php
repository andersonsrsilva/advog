<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Uf extends Model
{
    protected $table = 'uf';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }


}
