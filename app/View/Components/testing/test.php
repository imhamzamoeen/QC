<?php

namespace App\View\Components\testing;

use Illuminate\View\Component;

class test extends Component
{
  
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $all_policies;
    public function __construct($data)
    {
        //
        $this->all_policies=$data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-quote.sponsered-cards');
        // $all_policies=TestQuotePolicy::all();
        // return view('components.test-quote.sponsered-cards',compact('all_policies'));
    }
}
