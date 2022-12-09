<?php

namespace App\View\Components;

use \App\Models\Empleado;
use \App\Models\Sucursal;
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
        $sucursales = Sucursal::all();
        $params = 
        [
            'empleado' => $this->empleado,
            'sucursales' => $sucursales,
        ];
        return view('components.empleado-form', $params);
    }
}
