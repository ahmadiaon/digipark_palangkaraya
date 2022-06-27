<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityRegister extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'community_uuid',
        'user_uuid',
        'status',
        'name',
        'email',
        'age',
        'phone_number',
        'facebook',
        'instagram',
        'check1',
    ];
}
