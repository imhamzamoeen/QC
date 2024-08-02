<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SweetAlerts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $btnText;
    public function __construct($btnText)
    {
        $this->btnText = $btnText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sweet-alerts');
    }
}
