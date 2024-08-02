<?php

namespace App\View\Components\WeightGraphs;

use Illuminate\View\Component;

class SeniorLifeStandardJoint extends Component
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
        return view('components.weight-graphs.senior-life-standard-joint');
    }
}
