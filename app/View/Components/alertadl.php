<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alertadl extends Component
{
    public $color;
    public $texto;
    public $mensaje;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color="primary", $texto="", $mensaje="-")
    {
        $this->color = $color;
        $this->texto = $texto;
        $this->mensaje = $mensaje;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alertadl');
    }
}
