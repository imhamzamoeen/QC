<?php

namespace App\View\Components;

use App\Models\Country;
use App\Models\PaymentOption;
use Illuminate\View\Component;

class FormCreateCompanyComponent extends Component
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
        return view('components.form-create-company-component', [
            'countries' => Country::all(),
            'paymentOptions' => PaymentOption::all()
        ]);
    }
}
