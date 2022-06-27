<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'gallery_uuid',
        'category',
        'order_number',
        'status',
    ];
}
