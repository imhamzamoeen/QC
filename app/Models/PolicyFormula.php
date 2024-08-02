<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicyFormula extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'step_details',
        'operator_1',
        'operation',
        'operator_2',
        'company_policy_id',
    ];

    /**
     * Get the policy that owns the PolicyFormula
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function policy(): BelongsTo
    {
        return $this->belongsTo(CompanyPolicy::class, 'company_policy_id', 'id');
    }
}
