<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUIDTrait;

class TestQuotePolicy extends Model
{
    use HasFactory; 
    use UUIDTrait;
    
    protected $keyType = 'id';  //meri id konsi h php a 
    protected $appends = array('rating','amount');   // add a custom coloumn while fetching 

    protected $fillable = [
        'id',
        'image',
        'company_name',
        'company_email',
        'basic_amount',
        'upper_age',
        'lower_age',
        'features'
    ];

    public function getbasicamountAttribute($value){
        return $value.'000$';
    }
    public function getratingAttribute(){
        return    rand(0,5);
    }
    public function getamountAttribute(){
        return    $this->basic_amount.(rand(0,2000));
    }

    public function setupperageAttribute($value){
        $this->attributes['upper_age'] = (int)$value;
    }
    public function setlowerageAttribute($value){
        $this->attributes['lower_age'] = (int)$value;
    }

}