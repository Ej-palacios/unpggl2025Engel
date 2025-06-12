<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $modalId;
    public $title;
    public $size;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $modalId = 'defaultModal',
        $title = null,
        $size = null
    ) {
        $this->modalId = $modalId;
        $this->title = $title;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}