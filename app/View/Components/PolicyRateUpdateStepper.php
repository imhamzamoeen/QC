<?php

namespace App\View\Components;

use App\Models\InsuranceCompany;
use Illuminate\View\Component;

class PolicyRateUpdateStepper extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $company_data=InsuranceCompany::with(['policy'])->get();
        return view('components.policy-rate-update-stepper',compact('company_data'));
    }
}
