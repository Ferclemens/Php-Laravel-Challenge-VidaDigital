<?php

namespace App\Http\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use Livewire\WithPagination;

class EmpresaIndex extends Component
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
        $empresas = $this->consulta();
        $empresas = $empresas->paginate($this->paginacion);
        if($empresas->currentPage() > $empresas->lastPage())
        {
            $this->resetPage();
            $empresas = $this->consulta();
            $empresas = $empresas->paginate($this->paginacion);
        }
        $params = [
            'empresas' => $empresas,
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
