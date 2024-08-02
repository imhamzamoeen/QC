<?php

namespace App\Services;

use App\Models\CompanyFormula;

class CompanyFormulaService
{
    public function __construct()
    {
        //
    }


    public static function store_formula(array $data)
    {
        if (array_key_exists('whole_formula_check', $data)) {
            $counter = 1;
            if (array_key_exists('Company_Formula_For_Annual', $data)) 
            foreach ($data['Company_Formula_For_Annual'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'type' => 'annual',
                    'policy_type' =>'whole'
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'type' => 'annual',
                    'policy_type' =>'whole'

                ]);
                $counter++;
            }
            if (array_key_exists('Company_Formula_For_Semi_Annual', $data)) 
            foreach ($data['Company_Formula_For_Semi_Annual'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'type' => 'semi_annual',
                    'policy_type' =>'whole',
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'policy_type' =>'whole',
                    'type' => 'semi_annual'

                ]);
                $counter++;
            }

            if (array_key_exists('Company_Formula_For_Quarterly', $data)) 
            foreach ($data['Company_Formula_For_Quarterly'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'policy_type' =>'whole',
                    'type' => 'quarterly'
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'policy_type' =>'whole',
                    'type' => 'quarterly'

                ]);
                $counter++;
            }

            if (array_key_exists('Company_Formula_For_Monthly', $data)) 
            foreach ($data['Company_Formula_For_Monthly'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'policy_type' =>'whole',
                    'type' => 'monthly'
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'policy_type' =>'whole',
                    'type' => 'monthly'

                ]);
                $counter++;
            }
        }
        if (array_key_exists('term_formula_check', $data)) {
      
            $counter = 1;
            
            if (array_key_exists('Company_Formula_For_Annual_Term', $data)) 
            foreach ($data['Company_Formula_For_Annual_Term'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'annual'
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'annual'

                ]);
                $counter++;
            }

            if (array_key_exists('Company_Formula_For_Semi_Annual_Term', $data)) 
            foreach ($data['Company_Formula_For_Semi_Annual_Term'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'semi_annual'
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'semi_annual'

                ]);
                $counter++;
            }

            if (array_key_exists('Company_Formula_For_Quarterly_Term', $data)) 
            foreach ($data['Company_Formula_For_Quarterly_Term'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'quarterly'
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'quarterly'


                ]);
                $counter++;
            }

            if (array_key_exists('Company_Formula_For_Monthly_Term', $data)) 
            foreach ($data['Company_Formula_For_Monthly_Term'] as $key => $value) {

                CompanyFormula::updateOrCreate([
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'monthly'
                ], [
                    'company_id' => $data['company_id'],
                    'result_variable' => $value['result_variable'],
                    'Operator' => $value['Operator'],
                    'operand2' => $value['operand2'],
                    'operand1' => $value['operand1'],
                    'step_number' => $counter,
                    'policy_type' =>'term',
                    'type' => 'monthly'

                ]);
                $counter++;
            }
        }

        return true;
    }
}
