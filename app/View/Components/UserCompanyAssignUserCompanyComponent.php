<?php

namespace App\View\Components;

use App\Models\UserCompanyManagement;
use Illuminate\View\Component;

class UserCompanyAssignUserCompanyComponent extends Component
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
        $result=UserCompanyManagement::with(['user.UserAttributes'])->get();
        return view('components.user-company-assign-user-company-component',compact('result'));
    }
}
