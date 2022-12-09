<?php

namespace App\View\Components;

use App\Models\Sucursal;
use App\Models\Empresa;
use Illuminate\View\Component;

class SucursalForm extends Component
{
    private $sucursal;
    /**
     * Create a new component instance.
     *
     * @param \App\Models\Sucursal $sucursal
     * @return void
     */
    public function __construct($sucursal = null)
    {
        if(is_null($sucursal))
        {
            $sucursal = Sucursal::make([]);
        }
        $this->sucursal = $sucursal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $empresas = Empresa::all();
        $params = 
        [
            'sucursal' => $this->sucursal,
            'empresas' => $empresas,
        ];
        //dd($params);
        return view('components.sucursal-form', $params);
    }
}
