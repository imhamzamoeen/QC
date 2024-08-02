<?php

namespace App\Services;

use App\Models\CompanyFactors;

class FactorStoreService
{


    public static function StoreFactor(array $data)
    {
        $result = CompanyFactors::updateOrCreate([
            'company_id' => $data['company_id'],
        ], $data);
        return $result;
    }
}
