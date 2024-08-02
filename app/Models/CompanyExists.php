<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyExists extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'state',
        'company',
        'availability',
    ];
}
