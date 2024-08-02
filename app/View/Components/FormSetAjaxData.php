<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSetAjaxData extends Component
{
    public $companyId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($companyId)
    {
        $this->companyId = $companyId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-set-ajax-data');
    }
}
