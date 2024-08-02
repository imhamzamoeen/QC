<?php

namespace App\Models;

use App\Traits\UUID;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyPolicy extends Model
{
    use HasFactory, SoftDeletes, UUID;
    protected $fillable = [
        'policy_name',
        'issue_date',
        'highlights',
        'policy_type',
        'level',
        'insurance_company_id',
    ];

    protected $dates = ['issue_date'];

 

    public function getHighlightsAttribute($value)
    {
        return (json_decode($value));
    }



    /**
     * Get all of the comments for the CompanyPolicy
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function policyrates()
    {
        return $this->hasMany(PolicyRate::class, 'company_policy_id');
    }

    /**
     * Get the company that owns the CompanyPolicy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(InsuranceCompany::class, 'insurance_company_id', 'id');
    }
}
