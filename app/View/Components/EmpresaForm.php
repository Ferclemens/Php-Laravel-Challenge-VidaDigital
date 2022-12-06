<?php

namespace App\View\Components;

use App\Models\Empresa;
use Illuminate\View\Component;

class EmpresaForm extends Component
{
    private $empresa;
    /**
     * Create a new component instance.
     *
     * @param \App\Models\Empresa $empresa
     * @return void
     */
    public function __construct($empresa = null)
    {
        if(is_null($empresa))
        {
            $empresa = Empresa::make([]);
        }
        $this->empresa = $empresa;
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
            'empresa' => $this->empresa,
        ];
        return view('components.empresa-form', $params);
    }
}
