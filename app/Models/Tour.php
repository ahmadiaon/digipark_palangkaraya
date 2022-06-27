<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'address',
        'city',
        'province',
        'description',
        'image_path',
        'location',
        'facebook',
        'instagram',
        'youtube',
        'status',
    ];
}
