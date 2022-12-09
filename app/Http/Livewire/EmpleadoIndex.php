<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithPagination;

class EmpleadoIndex extends Component
{
    use WithPagination;

    public $busqueda = '';
    //----Paginado----
    public $paginacion = 5;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $empleados = $this->consulta();
        $empleados = $empleados->paginate($this->paginacion);
        if($empleados->currentPage() > $empleados->lastPage())
        {
            $this->resetPage();
            $empleados = $this->consulta();
            $empleados = $empleados->paginate($this->paginacion);
        }
        $params = [
            'empleados' => $empleados,
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
