<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class child_riders extends Model
{
    use HasFactory;
    use UUIDTrait;
    use SoftDeletes;
    protected $keyType = 'id';  //meri id konsi h php a 


    protected $fillable = [
        'id',
        'type',
        'whole_term_life',
        'pay20',
        'company_id',
        'max_child_supported',
        'RiderFor'
    ];

    public function company()
    {
        return $this->belongsTo(InsuranceCompany::class, 'company_id');
    }
}
