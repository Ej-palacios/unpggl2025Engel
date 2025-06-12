<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $class;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'primary')
    {
        $this->type = $type;
        $this->class = $this->getButtonClass($type);
    }
    
    protected function getButtonClass($type)
    {
        switch($type) {
            case 'secondary':
                return 'btn btn-secondary';
            case 'success':
                return 'btn btn-success';
            case 'danger':
                return 'btn btn-danger';
            case 'warning':
                return 'btn btn-warning';
            case 'info':
                return 'btn btn-info';
            case 'light':
                return 'btn btn-light';
            case 'dark':
                return 'btn btn-dark';
            case 'link':
                return 'btn btn-link';
            default: // primary
                return 'btn btn-primary';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}