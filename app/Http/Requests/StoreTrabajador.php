<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrabajador extends FormRequest
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
            'sueldo' => 'nullable',
            'estado' => 'nullable',
            'rendimiento_id' => 'nullable',
            'area_id' => 'nullable',
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
            'fecha_ini.required' => 'la fecha de inicio es obligatoria.',
            'fecha_ini.date' => 'la fecha debe tener el formato aaaa-mm-dd',
            'estado.required' => 'EL estado es requerido',
            'persona_id.required' => 'La persona es requerida'

        ];
    }
}
