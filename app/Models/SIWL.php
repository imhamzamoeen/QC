<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SIWL extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'age',
        'annual_premium',
        'face_amount',
        'gender',
        'smoker_status',
        'company_policy_id'
    ];

    /**
     * Get the policy that owns the AigInsurance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function policy(): BelongsTo
    {
        return $this->belongsTo(CompanyPolicyPolicy::class, 'company_policy_id', 'id');
    }
}
