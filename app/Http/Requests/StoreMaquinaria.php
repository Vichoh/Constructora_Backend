<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaquinaria extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'identificacion' => 'required|unique:maquinarias',
            'descripcion' => 'nullable',
            'numero_serie' => 'alpha_num|unique:maquinarias',
            'patente' => 'required|unique:maquinarias',
            'anho' => 'nullable',
            'ubicacion_id' => 'nullable',
            'rendimiento_id' => 'nullable',
            'modelo_id' => 'nullable',
            'marca_id' => 'required',
            'constructora_id' => 'nullable',
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'identificacion.required' => 'Identificacion obligatoria.',
            'identificacion.unique' => 'Identificacion unica en la table',
            'numero_serie.alpha_num' => 'El numero de serie deben ser digitos',
            'numero_serie.unique' => 'Numero de serie es unico',
            'patente.required' => 'Patente requerida',
            'patente.unique' => 'Patente unica',
            'marca_id.required' => 'Marca requerida',
        ];
    }
}
