<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialServiceSubmission extends Model
{
    protected $fillable = [
        'uuid',
        'financial_service_uuid',
        'user_uuid',
        'name',
        'address',
        'business_name',
        'business_address',
        'income',
        'loan_estimate',
        'purpose',
        'identity_card',
    ];
}
