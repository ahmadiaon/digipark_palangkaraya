<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid', 'user_uuid', 'image_path', 'description', 'value', 'status', 'business_uuid'
    ];
}
