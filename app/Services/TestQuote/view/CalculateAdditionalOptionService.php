<?php

namespace App\Services\TestQuote\view;

use App\Models\adb_riders;
use App\Models\child_riders;
use App\Models\InsuranceCompany;
use App\Models\LagacyRider;

class CalculateAdditionalOptionService
{
    public function __construct()
    {
        //
    }

    public static function calculate(array $data)
    {

        $legacy_check_variable = 'legacy_rider_rate_' . $data['policy_type'];

        $adb_factor = 0;
        $monthly_child_rider = 0;
        $semi_annual_child_rider = 0;
        $annual_child_rider = 0;

        $company_id = InsuranceCompany::where('name', $data['which_company'])->value('id');

        isset($data['legacy_rider']) ? ($legacy_factor = LagacyRider::where('company_id', $company_id)->value($legacy_check_variable)) : $legacy_factor = 0;


        if (isset($data['adb_rider'])) {
            $adb_factor = adb_riders::where('type', $data['policy_type'])->where('lower_limit', '<=', $data['age'])->where('upper_limit', '>=', $data['age'])->where('company_id', $company_id)->value('annual_rate');
        }
        if (isset($data['child_rider'])) {

            $bachy = $data['childrens'];
            if ((str_contains($data['which_policy'], '20'))) {

                $monthly_child_rider = child_riders::where('company_id', $company_id)->where('type', $data['policy_type'])->where('RiderFor', 'Monthly')->value('pay20') * $bachy;
                $semi_annual_child_rider = child_riders::where('company_id', $company_id)->where('type', $data['policy_type'])->where('RiderFor', 'Semi-Annual')->value('pay20') * $bachy;
                $annual_child_rider = child_riders::where('company_id', $company_id)->where('type', $data['policy_type'])->where('RiderFor', 'Annual')->value('pay20') * $bachy;
            } else {
                $monthly_child_rider = child_riders::where('company_id', $company_id)->where('type', $data['policy_type'])->where('RiderFor', 'Monthly')->value('whole_term_life') * $bachy;
                $semi_annual_child_rider = child_riders::where('company_id', $company_id)->where('type', $data['policy_type'])->where('RiderFor', 'Monthly')->value('whole_term_life') * $bachy;
                $annual_child_rider = child_riders::where('company_id', $company_id)->where('type', $data['policy_type'])->where('RiderFor', 'Monthly')->value('whole_term_life') * $bachy;
            }
        }

        $data['monthly_rate'] = $data['monthly_rate'] + $legacy_factor + $adb_factor + $monthly_child_rider;
        $data['semi_annual_rate'] = $data['semi_annual_rate'] + $legacy_factor + $adb_factor + $semi_annual_child_rider;
        $data['annual_rate'] = $data['annual_rate'] + $legacy_factor + $adb_factor + $annual_child_rider;
        return  array(
            'monthly_rate' => round($data['monthly_rate'], 2),
            'semi_annual_rate' => round($data['semi_annual_rate'], 2),
            'annual_rate' => round($data['annual_rate'], 2),
            'legacy_rider' => $legacy_factor,
            'adb_rider' => $adb_factor,
            'monthly_child_rider' => $monthly_child_rider,
            'semi_annual_child_rider' => $semi_annual_child_rider,
            'annual_child_rider' => $annual_child_rider,
        );
    }
}
