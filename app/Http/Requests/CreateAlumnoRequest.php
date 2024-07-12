<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:50',
            'curso' => 'required|string|max:50',
            'nota_1' => 'required|numeric|min:0|max:20',
            'nota_2' => 'required|numeric|min:0|max:20',
            'fecha_reg' => 'required|date',
            // Añade las reglas de validación necesarias
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es requerido',
            'curso.required' => 'El curso es requerida',
            'nota_1.required' => 'La nota 1 es requerida',
            'nota_2.required' => 'La nota 2 es requerida',
            'fecha_reg.required' => 'La fecha de registro es requerida',
            ];
    }
}
