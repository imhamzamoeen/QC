<?php

namespace App\Services\TestQuoteCalculation;

use App\Jobs\ActivityLogJob;
use App\Models\comapnies;

class FIndWholeService
{

    public static function Calculate_whole($data, $company_data)
    {

        $formula_array = [];
        $result_collection = collect([]);
        $annual = 0;
        $semi_annual = 0;
        $monthly = 0;
        $quarterly = 0;

        $policy_check = $data['policy_type'] . '_factor_check';     //this is used k jo policy type peechy s aa rhi usky factors hn ya nhe 


        /* the below code checks that riders supported by the company */
        $riders_options = [];


        if ($company_data->FACTORS->$policy_check == 1) {

            //things we need in that array  begin ... yeh woh jo hm later formula calculate krty waqt direct rate utha lety is array s 
            $data['policy_type'] == 'whole' ? $formula_array['annual_policy_fee'] = $company_data->FACTORS->policy_fee_annual_whole : $formula_array['annual_policy_fee'] =  $company_data->FACTORS->policy_fee_annual_term;
            $data['policy_type'] == 'whole' ? $formula_array['semi_annual_policy_fee'] = $company_data->FACTORS->policy_fee_semi_annual_whole : $formula_array['semi_annual_policy_fee'] =  $company_data->FACTORS->policy_fee_semi_annual_term;
            $data['policy_type'] == 'whole' ? $formula_array['quarterly_policy_fee'] = $company_data->FACTORS->policy_fee_quarterly_whole : $formula_array['quarterly_policy_fee'] =  $company_data->FACTORS->policy_fee_quarterly_term;
            $data['policy_type'] == 'whole' ? $formula_array['monthly_policy_fee'] = $company_data->FACTORS->policy_fee_monthly_whole : $formula_array['monthly_policy_fee'] =  $company_data->FACTORS->policy_fee_monthly_term;

            $data['policy_type'] == 'whole' ? $formula_array['annual_mode_factor'] = $company_data->FACTORS->annual_mode_factor_whole : $formula_array['annual_mode_factor'] =  $company_data->FACTORS->annual_mode_factor_term;
            $data['policy_type'] == 'whole' ? $formula_array['semi_annual_mode_factor'] = $company_data->FACTORS->semi_annual_mode_factor_whole : $formula_array['semi_annual_mode_factor'] =  $company_data->FACTORS->semi_annual_mode_factor_term;
            $data['policy_type'] == 'whole' ? $formula_array['quarterly_mode_factor'] = $company_data->FACTORS->quarterly_mode_factor_whole : $formula_array['quarterly_mode_factor'] =  $company_data->FACTORS->quarterly_mode_factor_term;
            $data['policy_type'] == 'whole' ? $formula_array['monthly_mode_factor'] = $company_data->FACTORS->monthly_mode_factor_whole : $formula_array['monthly_mode_factor'] =  $company_data->FACTORS->monthly_mode_factor_term;
            $formula_array['coverage'] = (int)$data['coverage'];
            $formula_array['age'] = (int)$data['age'];

            $going_type = 'annual';       //this variable is used to store calculated values to annual semi annual and vice verca 

            $legacy_check_variable = 'legacy_rider_rate_' . $data['policy_type'];

            $company_data->ADB->isnotEmpty() ? array_push($riders_options, 'ADB') : '';
            $company_data->CHILD->isnotEmpty() ? array_push($riders_options, 'CHILD') : '';

            $company_data->Legacy != NULL ? ($company_data->LEGACY->$legacy_check_variable > 0 ? array_push($riders_options, 'LBL') : '') : '';

            /* the Above code checks that riders supported by the company */

            foreach ($company_data->policy as $sub_policy) {


                if ($sub_policy->policyrates->isnotEmpty()) {
                    $rate_from_db = (float)$sub_policy->policyrates[0]->monthly_premium;
                    if ($rate_from_db > 0) {

                        $formula_array['rate_from_db'] = (float)$sub_policy->policyrates[0]->monthly_premium;

                        foreach ($company_data->FORMULA as  $eachstep) {

                            

                                /* The below line check k agar operand operator ya opernad2 string h and array mai nhe para tu as a string rkha do else number h tu number rkha do */
                                (float)$eachstep->operand1 > 0 ? ((array_key_exists($eachstep->operand1, $formula_array) == false) ?   $formula_array[$eachstep->operand1] = (float)$eachstep->operand1 : '')   : ((array_key_exists($eachstep->operand1, $formula_array) == false) ?   $formula_array[$eachstep->operand1] = $eachstep->operand1 : '');
                                (float)$eachstep->Operator > 0 ? ((array_key_exists($eachstep->Operator, $formula_array) == false) ?   $formula_array[$eachstep->Operator] = (float)$eachstep->Operator : '')   : ((array_key_exists($eachstep->Operator, $formula_array) == false) ?   $formula_array[$eachstep->Operator] = $eachstep->Operator : '');
                                (float)$eachstep->operand2 > 0 ? ((array_key_exists($eachstep->operand2, $formula_array) == false) ?   $formula_array[$eachstep->operand2] = (float)$eachstep->operand2 : '')   : ((array_key_exists($eachstep->operand2, $formula_array) == false) ?   $formula_array[$eachstep->operand2] = $eachstep->operand2 : '');

                                $operand1 = $formula_array[$eachstep->operand1];
                                $operator = $formula_array[$eachstep->Operator];
                                $operand2 = $formula_array[$eachstep->operand2];
                                $operator != 'round' ?  ${$eachstep->result_variable} = eval("return $operand1 $operator $operand2;") :   ${$eachstep->result_variable} = round($operand1, $operand2);
                                $formula_array[$eachstep->result_variable] =  ${$eachstep->result_variable};
                                /* agar current step ki type change ho gai h tu going type ko us s update kr do and agr same h tu us k variable mai value update krty jao */
                                $going_type = $eachstep->type;
                                ${$going_type} =  ${$eachstep->result_variable};
                            
                        }
                        //things that get changed when sub policy changes 
                        $array = array(
                            'age' => $data['age'],
                            'user_name' => $data['first_name'] . $data['last_name'],
                            'user_email' => $data['user_email'],
                            'phone' => $data['phone'],
                            //  'model'=>$policySpatie, 
                            'what_tobaco' => $data['smoker_status'],
                            'annual_policy_fee' => $formula_array['annual_policy_fee'],
                            'semi_annual_policy_fee' => $formula_array['semi_annual_policy_fee'],
                            'monthly_policy_fee' => $formula_array['monthly_policy_fee'],
                            'annual_factor' => $formula_array['annual_mode_factor'],
                            'semi_annual_factor' => $formula_array['semi_annual_mode_factor'],
                            'monthly_factor' => $formula_array['monthly_mode_factor'],
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
                            'riders' => empty($riders_options) ? NULL : $riders_options,            //rider will contain k which policy support what facotr
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
