<?php

namespace App\View\Components;

use App\Models\InsuranceCompany;
use App\Models\User;
use Illuminate\View\Component;

class UserCompanyAssignUserCompanyModalComponent extends Component
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
        $user=User::with(['UserAttributes'])->get();
        $companies=InsuranceCompany::all();
        return view('components.user-company-assign-user-company-modal-component',compact('user','companies'));
    }
}
