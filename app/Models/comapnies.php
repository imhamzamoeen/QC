<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comapnies extends Model
{
    use HasFactory;
    use UUIDTrait;
    use SoftDeletes;
    protected $keyType = 'id';  //meri id konsi h php a 
    protected $appends = array('rating');   // add a custom coloumn while fetching 


    protected $fillable = [
        'id',
        'name',
        'image',
        'semi_annual_factor',
        'monthly_annual_factor',
        'policy_fee_term',
        'annual_fee',
        'semi_annual_fee',
        'email',
        'features',
        'monthly_fee',
    ];

    /**
     * Get the user associated with the comapnies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function getfeaturesAttribute($value){
        return   explode(",",$value);          
    }


    public function getratingAttribute(){
        return    rand(0,5);
    }
     
    public function policies(){
        return $this->hasMany(PolicyCateogry::class);
    }

    public function adb_factor()
    {
        return $this->hasMany(adb_riders::class,'comapnies_id');
    }
    public function child_factor()
    {
        return $this->hasMany(child_riders::class);
    }
}
