<?php

namespace App\Services;

use App\Models\PolicyFormula;
use App\Repositories\Interfaces\CompanyPolicyRepositoryInterface;

class CompanyPolicyService
{
    protected $repo;

    public function __construct(CompanyPolicyRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function storeData(array $data)
    {
        return $this->repo->updateOrCreate($data);
    }

    public function storeFormula($formulaDetails, $fk)
    {
        foreach ($formulaDetails as $key => $step) {
            PolicyFormula::create([
                'step_details' => $step['step_detail'],
                'operator_1' => $step['operator_1'],
                'operation' => $step['operation'],
                'operator_2' => $step['operator_2'],
                'company_policy_id' => $fk
            ]);
        }
    }

    public function with($relations)
    {
        return $this->repo->with($relations);
    }
}
