<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeightWeightModel extends Model
{
    use HasFactory; use SoftDeletes;
    protected $fillable=[
        'min_height',
        'max_height',
        'min_weight',
        'max_weight'
    ];

    function cm2feet($cm)
    {
        $inches = $cm/2.54;
        $feet = intval($inches/12);
        $inches = $inches%12;
        return sprintf("%d' %d''", $feet, $inches);
    }

    // public function setMinHeightAttribute($value)
    // {
    //     $cms = $value*2.54;
    //     $feet = $this->cm2feet($cms);
    //     $this->attributes['min_height'] = strtolower($feet);
    // }

    // public function setMaxHeightAttribute($value)
    // {
    //     $cms = $value*2.54;
    //     $feet = $this->cm2feet($cms);
    //     $this->attributes['max_height'] = strtolower($feet);
    // }
}
