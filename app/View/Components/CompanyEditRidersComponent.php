<?php

namespace App\View\Components;

use App\Models\InsuranceCompany;
use Illuminate\View\Component;

class CompanyEditRidersComponent extends Component
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
        $company_with_factor = InsuranceCompany::with(['ADB', 'CHILD', 'LEGACY'])->first();
        return view('components.company-edit-riders-component', compact('company_with_factor'));
    }
}
