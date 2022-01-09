<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputdl extends Component
{

    public $columna;
    public $nombre;
    public $texto;
    public $type;
    public $valor;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columna="12", $nombre='test', $texto='', $type='text', $valor='')
    {
        $this->columna = $columna;
        $this->nombre = $nombre;
        $this->texto = $texto;
        $this->type = $type;
        $this->valor = $valor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputdl');
    }
}
