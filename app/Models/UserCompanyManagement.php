<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCompanyManagement extends Model
{
    use HasFactory, SoftDeletes; use UUID;
    protected $fillable = [
        'user_id',
        'companies',
        'filter_check'
    ];

    /**
     * Get the user that owns the UserCompanyManagement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
