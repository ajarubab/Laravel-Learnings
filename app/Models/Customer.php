<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'birth_date',
        'wallet_balance',
        'total_visits',
        'customer_rating',
        'is_prime_customer',
        'prime_customer_code',
        'email',
        'comments'
    ];
}
