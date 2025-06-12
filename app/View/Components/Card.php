<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $headerClass;
    public $bodyClass;
    public $footerClass;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $title = null,
        $headerClass = '',
        $bodyClass = '',
        $footerClass = ''
    ) {
        $this->headerClass = $headerClass ?: 'bg-white';
        $this->bodyClass = $bodyClass ?: 'bg-white';
        $this->footerClass = $footerClass ?: 'bg-light';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}