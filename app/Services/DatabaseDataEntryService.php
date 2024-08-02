<?php

namespace App\Services;

use App\Models\AgencyCarriers;
use App\Models\UserAttributes;

class DatabaseDataEntryService
{
    public function __construct()
    {
        //
    }

    public static function storeCarrierNameService($request)
    {
        if (AgencyCarriers::create($request))
            return JsonResponseService::getJsonSuccess('Record added successfully');
        return JsonResponseService::getJsonFailed('Failed to add record or invalid priviledges, please try again');
    }
}
