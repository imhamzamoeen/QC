<?php

namespace App\View\Components;

use App\Models\CompanyExists;
use Illuminate\View\Component;

class CompanyExistsFileUpload extends Component
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
         $states=CompanyExists::distinct()->pluck('state');
        return view('components.company-exists-file-upload',compact('states'));
    }
}
