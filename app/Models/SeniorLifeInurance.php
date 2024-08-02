<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeniorLifeInurance extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'age',
        'monthly_premium',
        'face_amount',
        'gender',
        'smoker_status'
    ];
}
