<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadoIndex extends Component
{
    public $busqueda = '';
    
    public function render()
    {
        $empleados = $this->consulta();
        $params = [
            'empleados' => $empleados->get(),
        ];
        return view('livewire.empleado-index', $params);
    }
    private function consulta()
    {
        $query = Empleado::orderByDesc('id');
        if($this->busqueda != '')
        {
            $query->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $query;
    }
}
