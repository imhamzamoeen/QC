<?php

namespace App\Services;

use App\Models\LagacyRider;

class LegacyRiderService
{
    public function __construct()
    {
        //
    }
    public static function StoreLegacy(array $data){

        $legacy_data=array ("company_id"=>$data['company_id']);
        if($data['legacy_rider_rate_term']!=NULL && $data['legacy_rider_rate_term']>0){
            $legacy_data += ['legacy_rider_rate_term' => $data['legacy_rider_rate_term']];
          
        }
        if($data['legacy_rider_rate_whole']!=NULL && $data['legacy_rider_rate_whole']>0){

            $legacy_data += ['legacy_rider_rate_whole'=> $data['legacy_rider_rate_whole']];
          
        }
        if(array_key_exists('legacy_rider_rate_whole', $legacy_data) || array_key_exists('legacy_rider_rate_term', $legacy_data) ){
            LagacyRider::updateOrCreate([
                'company_id'=>$data['company_id']
            ],$data);
        }
     
        return ;
    }
}
