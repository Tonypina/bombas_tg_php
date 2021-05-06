<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    public $source;
    public $type;
    public $service;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($source, $type, $service)
    {
        $this->source = $source;
        $this->type = $type;
        $this->service = $service;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
