<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTiketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //Si coloco True, autorizo a todos los usuarios que ingresen y manipulen los datos
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'titulo' => ['required', 'max:100'],
            'descripcion' => ['required', 'max:300'],
            'provincia_id' => ['required', 'integer'],
        ];//Para usar todo esto dentro del controlador de Tiket, voy hasta Store
            //y modifico la linea Store para que quede asi:
            // public function store(StoreTiketRequest $request)

            if ($this->getMethod() == 'POST'){
                $rules += ['provincia_id' => ['exists:provincias,id']];
            }
            return $rules;
    }

    //Para que el mensaje este en español:
    public function messages()
    {
        return [
            'titulo.required' => 'El campo :attribute es requerido.',
            'descripcion.required' => 'El campo descripcion no debe estar vacio.',
            'max' => 'El campo :attribute no puede tener más de :max caracteres.',
            'exists' => 'El campo :attribute no existe en la base de datos.',
            'integer' => 'El campo :attribute debe ser un número entero.',
        ];
    }
}
