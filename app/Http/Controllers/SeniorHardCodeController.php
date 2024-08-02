<?php

namespace App\Http\Controllers;

use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeniorHardCodeController extends Controller
{
    //
    public function get_sub_policy_types(Request $request){
        try {     
            $data=DB::table('policy_cateogries')->where('cateogry',$request->cateogry)->get();
            if($data->isNotEmpty())
            return JsonResponseService::JsonSuccess('senior types gotten!',$data);

         return JsonResponseService::JsonFailed('failed to get senior types!',$data);  
       
     } catch (Exception $exception) {
         return  JsonResponseService::getJsonException($exception);
     }
    }
}
