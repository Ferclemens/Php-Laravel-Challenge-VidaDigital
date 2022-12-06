<?php

namespace App\View\Components;

use \App\Models\Empleado;
use Illuminate\View\Component;

class EmpleadoForm extends Component
{
    private $empleado;
    /**
     * Create a new component instance.
     *
     * @param \App\Models\Empleado $empleado
     * @return void
     */
    public function __construct( $empleado = null)
    {
        if(is_null($empleado))
        {
            $empleado = Empleado::make([]);
        }
        $this->empleado = $empleado;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = 
        [
            'empleado' => $this->empleado,
        ];
        return view('components.empleado-form', $params);
    }
}
