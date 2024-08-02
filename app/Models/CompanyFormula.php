<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyFormula extends Model
{
    use HasFactory,SoftDeletes, UUID;

    protected $fillable = [
        'company_id',
        'result_variable',
        'Operator',
        'operand2',
        'operand1',
        'step_number',
        'type',
        'policy_type'
    ];

    public function Company(): BelongsTo
    {
        return $this->belongsTo(InsuranceCompany::class, 'company_id', 'id');
    }
}
