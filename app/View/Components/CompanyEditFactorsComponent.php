<?php

namespace App\View\Components;

use App\Models\InsuranceCompany;
use Illuminate\View\Component;

class CompanyEditFactorsComponent extends Component
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
        $company_with_factor=InsuranceCompany::where('id','14e34cec-a2b8-4198-bfed-960883242310')->with(['FACTORS'])->first();
        return view('components.company-edit-factors-component',compact('company_with_factor'));
    }
}
