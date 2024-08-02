<?php

namespace App\Services;

use App\Jobs\ActivityLogJob;
use App\Models\CompanyPolicy;
use App\Models\PolicyRate;


class NewVistaTempService
{
    public function __construct()
    {
        //
    }
    public static function calculate($data, $company_data)
    {
        // $pushed_array = [];
        $policy_check = $data['policy_type'] . '_factor_check';
        /* the below code checks that riders supported by the company */
        $riders_options = [];
        $legacy_check_variable = 'legacy_rider_rate_' . $data['policy_type'];

        $company_data->ADB->isnotEmpty() ? array_push($riders_options, 'ADB') : '';
        $company_data->CHILD->isnotEmpty() ? array_push($riders_options, 'CHILD') : '';

        $company_data->Legacy != NULL ? ($company_data->LEGACY->$legacy_check_variable > 0 ? array_push($riders_options, 'LBL') : '') : '';
        /* the Above code checks that riders supported by the company */


        $result_collection = collect([]);

        $data['smoker_status'] == 'smoker' ? $what_tobaco = 'smoker' :   $what_tobaco = 'non-smoker';
        array_key_exists('legacy_rider', $data) ? $legacy_factor = 4 :   $legacy_factor = 0;
        if ($company_data->FACTORS->$policy_check == 1) {

            foreach ($company_data->policy as $sub_policy) {

                if (isset($sub_policy->policyrates[0]->age)) {


                    $rate_from_db = $sub_policy->policyrates[0]->monthly_premium;
                    $rate_from_db = (float)$rate_from_db;
                    if ($rate_from_db > 0) {

                        $annaul_policy_fee = 'policy_fee_annual_' . $data['policy_type'];
                        $semi_annual_policy_fee = 'policy_fee_semi_annual_' . $data['policy_type'];
                        $monthly_policy_fee = 'policy_fee_monthly_' . $data['policy_type'];
                        $annual_mode_factor = 'annual_mode_factor_' . $data['policy_type'];
                        $semi_annual_mode_factor = 'semi_annual_mode_factor_' . $data['policy_type'];
                        $monthly_mode_factor = 'monthly_mode_factor_' . $data['policy_type'];

                        $annaul_policy_fee = $company_data->FACTORS->$annaul_policy_fee;
                        $semi_annual_policy_fee = $company_data->FACTORS->$semi_annual_policy_fee;
                        $monthly_policy_fee = $company_data->FACTORS->$monthly_policy_fee;
                        $annual_mode_factor = $company_data->FACTORS->$annual_mode_factor;
                        $semi_annual_mode_factor = $company_data->FACTORS->$semi_annual_mode_factor;
                        $monthly_mode_factor = $company_data->FACTORS->$monthly_mode_factor;


                        $coverage = (int)$data['coverage'];
                        $monthly = ($rate_from_db + $monthly_policy_fee) * $monthly_mode_factor;


                        $annual = ($rate_from_db + $annaul_policy_fee) * $annual_mode_factor;

                        $semi_annual =  ($rate_from_db + $semi_annual_policy_fee) * $semi_annual_mode_factor;
                        $company_info = CompanyPolicy::where('id', $sub_policy)->with(['company'])->first();
                        $array = array(
                            'age' => $data['age'],
                            'user_name' => $data['first_name'] . $data['last_name'],
                            'user_email' => $data['user_email'],
                            'phone' => $data['phone'],
                            //  'model'=>$policySpatie, 
                            'what_tobaco' => $what_tobaco,
                            'Policy_Fee_Per_Policy' => '0',
                            'semi_annual_factor' => '0',
                            'monthly_factor' => '0',
                            'rate_from_db' => $rate_from_db,
                            'policy_type' => $sub_policy->policy_type,
                            'name' => $company_data->name,
                            'image' => $company_data->company_image,
                            'rating' => rand(0, 5),
                            'email' =>  $company_data->email,
                            'sub_policy_type' => $sub_policy->policy_name,
                            'level' => $sub_policy->level,
                            'features' => $sub_policy->highlights,
                            'annual' => round($annual, 2),
                            'semi_annual' => round($semi_annual, 2),
                            'monthly' => round($monthly, 2),
                            'PerformedOn' => $sub_policy->id,
                            'Causer' => auth()->user()->id,
                            'riders' => empty($riders_options) ? NULL : json_encode($riders_options),                //rider will contain k which policy support what facotr
                        );
                        $result_collection->push($array);

                        dispatch(new ActivityLogJob($array));
                    }
                }
            }
        }

        return  $result_collection;
    }
}
