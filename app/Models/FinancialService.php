<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialService extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'address',
        'logo_path',
        'description',
        'image_path',
        'location',
        'facebook',
        'instagram',
        'youtube',
        'status',
        'city',
        'province',
    ];
}
