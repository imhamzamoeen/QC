<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUIDTrait;


class PolicyCateogry extends Model
{
    use HasFactory;
    // use UUIDTrait;
    // protected $keyType = 'id';  //meri id konsi h php a 


    protected $fillable = [
        'id',
        'sub_category_name',
        'cateogry',
        'companies_id'
    ];

    public function getsubCategoryNameAttribute($value){
        return str_replace("_", " ", $value);    //removes underscore and replace with space
    }
    /**
     * Get the user that owns the PolicyCateogry
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(comapnies::class, 'companies_id');
    }

    /**
     * Get all of the comments for the PolicyCateogry
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wholetermData()
    {
        return $this->hasMany(WholeTermCateogryData::class, 'policy_cateogries_id' );
    }
    /**
     * Get all of the comments for the PolicyCateogry
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function termData()
    {
        return $this->hasMany(TermCateogryData::class,'policy_cateogries_id' );
    }
   
   
}
