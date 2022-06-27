<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialServiceRegister extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'financial_service_uuid',
        'user_uuid',
        'name',
        'address',
        'phone_number',
        'email',
        'profession',
        'status',
    ];
}
