<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lawsuit extends Model
{
    protected $table = 'legal-proceeding';

    protected $fillable = ['name'];

}
