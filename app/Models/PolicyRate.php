<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicyRate extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'age',
        'monthly_premium',   //jo insurance n rkhi v rate
        'face_amount',  // jo paisy user n select kie 
        'gender',
        'smoker_status',
        'company_policy_id'
    ];

    /**
     * Get the policy that owns the PolicyRate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function policy(): BelongsTo
    {
        return $this->belongsTo(CompanyPolicy::class, 'company_policy_id', 'id');
    }
}
