<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentCreateRequest extends FormRequest
{
    
    function attributes(){
        return [
            'mensaje'     => 'Mensaje del comentario',
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
            'mensaje'     => 'required|string|max:300|min:2',
        ];
    }
    
    function messages() {
        $required = 'El campo :attribute es obligatorio.';
        $string   = 'El campo :attribute tiene que ser una cadena de caracteres.';
        $max      = 'La longitud máxima del campo :attribute es :max';
        $min      = 'El valor mínimo del campo :attribute es :min';
        
        return [
            'mensaje.required'      => $required,
            'mensaje.string'        => $string,
            'mensaje.max'           => $max,
            'mensaje.min'           => $min
        ];
    }
}
