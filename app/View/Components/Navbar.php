<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $brand;
    public $brandUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($brand = null, $brandUrl = '/')
    {
        $this->brand = $brand;
        $this->brandUrl = $brandUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}