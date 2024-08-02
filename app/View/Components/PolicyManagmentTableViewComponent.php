<?php

namespace App\View\Components;

use App\Models\CompanyPolicy;
use Illuminate\View\Component;

class PolicyManagmentTableViewComponent extends Component
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
       $all_policies = CompanyPolicy::with(['company'])->orderBy('insurance_company_id','ASC')->get();
        return view('components.policy-managment-table-view-component',compact('all_policies'));
    }
}
