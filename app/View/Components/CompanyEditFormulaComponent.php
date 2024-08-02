<?php

namespace App\View\Components;

use App\Models\InsuranceCompany;
use Illuminate\View\Component;

class CompanyEditFormulaComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $company_with_factor=InsuranceCompany:: with(['FORMULA'=> function ($query)  {
            $query->orderBy('step_number', 'ASC');
       }])->first();
       
        return view('components.company-edit-formula-component',compact('company_with_factor'));
    }
}
