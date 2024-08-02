<?php

namespace App\View\Components\testQuote\ProductView;

use Illuminate\View\Component;

class ViewPolicy extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $result_collection;
    public function __construct($data)
    {
        $this->result_collection=$data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-quote.product-view.view');
    }
}
