<?php

namespace App\Http\Livewire;

use App\Models\Sucursal;
use App\Models\Empresa;
use Livewire\Component;
use Livewire\WithPagination;

class SucursalIndex extends Component
{
    use WithPagination;

    public $busqueda = '';
    //----Paginado----
    public $paginacion = 5;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [

        'busqueda' => ['except' => '', 'as' => 'busqueda'],
        'paginacion' => ['except' => 5, 'as' => 'pagina'],

    ];
    
    public function render()
    {
        $empresas = Empresa::all();
        $sucursales = $this->consulta();
        $sucursales = $sucursales->paginate($this->paginacion);
        if($sucursales->currentPage() > $sucursales->lastPage())
        {
            $this->resetPage();
            $sucursales = $this->consulta();
            $sucursales = $sucursales->paginate($this->paginacion);
        }
        $params = [
            'sucursales' => $sucursales,
            'empresas' => $empresas,
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
