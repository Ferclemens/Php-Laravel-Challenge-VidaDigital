<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucursalRequest;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sucursal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'nombre' => 'required|max:120',
                'direccion' => 'required',
                'email' => 'nullable|max:120',
                'telefono' => 'nullable|numeric',
                'id_empresa' => 'required',
            ]);
        $sucursal = Sucursal::create($data);
        return redirect()->route('sucursal.index');

        /*  $nombre = $request->input('nombre');
            $direccion = $request->input('direccion');
            $email = $request->input('email');
            $telefono = $request->input('telefono');
            $id_empresa = $request->input('id_empresa');

            $sucursal = new Sucursal;
            $sucursal->nombre = $nombre;
            $sucursal->direccion = $direccion;
            $sucursal->email = $email;
            $sucursal->telefono = $telefono;
            $sucursal->id_empresa = $id_empresa;
            $sucursal->save();
            return redirect()->route('sucursal.index'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        return view('sucursal.show', ['sucursal' => $sucursal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        return view('sucursal.edit', compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(SucursalRequest $request, Sucursal $sucursal)
    {
        $data = $request->validated();
        $sucursal->update($data);
        return redirect()->route('sucursal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursal.index');
    }
}
