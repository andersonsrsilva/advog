<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalProceedingCustomers extends Model
{
    protected $table = 'legal_proceeding_customers';

    public $timestamps = false;

    protected $fillable = [
        'legal_proceeding_id',
        'customer_id'
    ];

}
