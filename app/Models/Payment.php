<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'transactionId',
        'status',
        'result',
        'amount',
        'ip'
    ];
}
