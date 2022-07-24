<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawsuitType extends Model
{
    protected $table = 'lawsuit_type';

    protected $fillable = ['name'];

}
