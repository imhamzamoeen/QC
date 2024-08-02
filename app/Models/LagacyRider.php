<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LagacyRider extends Model
{
    use HasFactory;
    use UUIDTrait;
    use SoftDeletes;
    protected $keyType = 'id';  //meri id konsi h php a 


    protected $fillable = [
         'id',
          'legacy_rider_rate_whole',
          'legacy_rider_rate_term',
         'company_id',
  
         
    ];
    public function company()
    {
        return $this->belongsTo(InsuranceCompany::class,'company_id');
    }
}
