<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WholeTermCateogryData extends Model
{
    use HasFactory;
    use UUIDTrait;
    protected $keyType = 'id';  //meri id konsi h php a 
    protected $fillable=[];
}
