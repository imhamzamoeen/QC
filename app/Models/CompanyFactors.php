<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyFactors extends Model
{


    use HasFactory;
    use UUIDTrait;
    use SoftDeletes;
    protected $keyType = 'id';  //meri id konsi h php a 


    protected $fillable = [
        'id',
        'whole_factor_check',
        'annual_mode_factor_whole',
        'policy_fee_annual_whole',
        'semi_annual_mode_factor_whole',
        'policy_fee_semi_annual_whole',
        'quarterly_mode_factor_whole',
        'policy_fee_quarterly_whole',
        'monthly_mode_factor_whole',
        'policy_fee_monthly_whole',
        'term_factor_check',
        'annual_mode_factor_term',
        'policy_fee_annual_term',
        'semi_annual_mode_factor_term',
        'policy_fee_semi_annual_term',
        'quarterly_mode_factor_term',
        'policy_fee_quarterly_term',
        'monthly_mode_factor_term',
        'policy_fee_monthly_term',
        'company_id',
    ];
    public function company()
    {
        return $this->belongsTo(InsuranceCompany::class, 'company_id');
    }
}
