<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioCreateRequest extends FormRequest
{
    
    function attributes(){
        return [
            'nombre'     => 'Nombre completo de la persona',
            'correo' => 'Correo electrónico',
            'fechaNacimiento'      => 'Fecha de nacimiento',
        ];
    }
    
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
        return [
            'nombre'     => 'required|string|max:60|min:2',
            'correo' => 'required|string|max:60|min:2|unique:usuario,correo',
            'fechaNacimiento'      => 'required|date',
        ];
    }
    
    function messages() {
        $required = 'El campo :attribute es obligatorio.';
        $string   = 'El campo :attribute tiene que ser una cadena de caracteres.';
        $max      = 'La longitud máxima del campo :attribute es :max';
        $min      = 'El valor mínimo del campo :attribute es :min';
        
        return [
            'nombre.required'      => $required,
            'nombre.string'        => $string,
            'nombre.max'           => $max,
            'nombre.min'           => $min,
            'correo.unique'        => 'El correo ya existe',
            'correo.required'  => $required,
            'correo.string'    => $string,
            'correo.max'       => $max,
            'correo.min'       => $min,
            'fechaNacimiento.required'       => $required,
            'fechaNacimiento.date'           => 'El campo :attribute tiene que ser una fecha en formato dd/mm/aaaa.',
            
        ];
    }
}
