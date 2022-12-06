<?php

namespace App\Http\Livewire;

use App\Models\Empresa;
use Livewire\Component;

class EmpresaIndex extends Component
{
    public $busqueda = '';

    public function render()
    {
        $empresas = $this->consulta();
        $params = [
            'empresas' => $empresas->get(),
        ];
        return view('livewire.empresa-index', $params);
    }
    private function consulta()
    {
        $query = Empresa::orderByDesc('id');
        if($this->busqueda != '')
        {
            $query->where('nombre','LIKE','%' .$this->busqueda. '%');
        }
        return $query;
    }
}
