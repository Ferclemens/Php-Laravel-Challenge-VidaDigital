<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadoRequest;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleado.index');
        
        /*

        //------Otra forma sustituta de func compact('empleados')

        $empleados = Empleado::orderByDesc('id')->get();
        $params = [
            'empleados' => $empleados
        ]; 
        return view('empleado.index', $params);
        
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoRequest $request)
    {
        $data = $request->validate(
            [
                'nombre' => 'required|max:120',
                'apellido' => 'required|max:120',
                'direccion' => 'required',
                'email' => 'nullable|max:120',
                'dni' => 'required',
                'telefono' => 'nullable|numeric',
                'fecha_nacimiento' => 'required',
                'fecha_ingreso' => 'required',
                'cargo' => 'required|max:120',
                'sueldo' => 'required',
                'id_sucursal' => 'required',
            ]
        );
        //dd($data);
        $empleado = Empleado::create($data);
        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleado.show',['empleado' => $empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoRequest $request, Empleado $empleado)
    {
        $data = $request->validated();
        $empleado->update($data);
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleado.index');
    }
}
