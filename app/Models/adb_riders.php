<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class adb_riders extends Model
{
    use HasFactory;
    use UUIDTrait;
    use SoftDeletes;
    protected $keyType = 'id';  //meri id konsi h php a 


    protected $fillable = [
         'id',
         'lower_limit',
         'upper_limit',
         'annual_rate',
         'company_id',
         'type'
         
    ];
    public function company()
    {
        return $this->belongsTo(InsuranceCompany::class,'company_id');
    }
}
