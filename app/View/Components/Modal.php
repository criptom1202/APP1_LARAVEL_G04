<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $cTitulo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cTitulo)
    {
        $this->cTitulo = $cTitulo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
