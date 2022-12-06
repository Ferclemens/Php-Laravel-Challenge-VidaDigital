<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return  [
            'nombre' => 'required|max:120',
            'apellido' => 'required|max:120',
            'dni' => 'required|numeric',
            'direccion' => 'required',
            'email' => 'nullable|max:120',
            'telefono' => 'nullable|numeric',
            'fecha_nacimiento' => 'date_format:Y-m-d',
            'fecha_ingreso' => 'date_format:Y-m-d',
            'cargo' => 'required|max:100',
            'sueldo' => 'required|numeric',
        ];
    }
}
