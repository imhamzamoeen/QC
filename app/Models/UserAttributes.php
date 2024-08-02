<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAttributes extends Model
{
    use HasFactory, SoftDeletes; use UUID;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'image',
        'user_type',
        'is_available',
        'status',
        'val_id',
    ];
}
