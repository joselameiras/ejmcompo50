<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEstudianteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            "nombre"=>'required|string|min:4|max:50',
            "apellidopaterno"=>'required|string|min:4|max:100',
            "credencial"=>'required|string',
            "email"=>'required|email'
        ];
    }
    public function messages()
    {
        return[
            "required" => 'El campo :field es requerido',
            "credencial.required" =>'Se necesita la credencial para continuar',
        ];
    }
}
