<?php

namespace App\Http\Livewire;

use App\Models\Sucursal;
use Livewire\Component;

class SucursalIndex extends Component
{
    public $busqueda = '';
    
    public function render()
    {
        $sucursales = $this->consulta();
        $params = [
            'sucursales' => $sucursales->get(),
        ];
        return view('livewire.sucursal-index', $params);
    }
    private function consulta()
    {
        $query = Sucursal::orderByDesc('id');
        if($this->busqueda != '')
        {
            $query->where('nombre','LIKE','%' .$this->busqueda. '%');
        }
        return $query;
    }

}
