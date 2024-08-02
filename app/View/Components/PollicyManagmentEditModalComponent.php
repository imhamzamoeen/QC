<?php

namespace App\View\Components;

use App\Models\InsuranceCompany;
use Illuminate\View\Component;

class PollicyManagmentEditModalComponent extends Component
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
        $all_companies=InsuranceCompany::Select('name','id')->get();
        return view('components.pollicy-managment-edit-modal-component',compact('all_companies'));
    }
}
