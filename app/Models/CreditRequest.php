<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditRequest extends Model
{
    use HasFactory;

    protected $fillable = ['rate', 'period', 'amount', 'credit_id', 'client_id'];
}
