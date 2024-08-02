<?php

namespace App\View\Components;

use App\Models\TestQuotePolicy;
use Illuminate\View\Component;

class SponseredCards extends Component
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
        return view('components.test-quote.sponsered-cards');
        // $all_policies=TestQuotePolicy::all();
        // return view('components.test-quote.sponsered-cards',compact('all_policies'));
    }
}
