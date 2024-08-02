<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class InsuranceCompany extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, UUID, InteractsWithMedia;

    protected $fillable = [
        'address',
        'description',
        'email',
        'name',
        'primary_contact',
        'secondary_contact',
        'func_name',
        'owner_id',
        'company_image',
        'existance_name',
    ];

    /**
     * Get the owner that owns the InsuranceCompany
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
    /**
     * Get all of the comments for the InsuranceCompany
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function policy()
    {
        return $this->hasMany(CompanyPolicy::class, 'insurance_company_id', 'id');
    }

    /**
     * Get all of the comments for the InsuranceCompany
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ADB(): HasMany
    {
        return $this->hasMany(adb_riders::class, 'company_id',);
    }

    public function CHILD(): HasMany
    {
        return $this->hasMany(child_riders::class, 'company_id', );
    }

    public function LEGACY(): HasOne
    {
        return $this->hasOne(LagacyRider::class, 'company_id', );
    }

    public function FACTORS(): HasOne
    {
        return $this->hasOne(CompanyFactors::class, 'company_id', );
    }

    public function FORMULA():HasMany
    {
        return $this->hasMany(CompanyFormula::class, 'company_id', );
    }
}
