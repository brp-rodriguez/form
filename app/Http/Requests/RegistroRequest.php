<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
{

    protected $redirectRoute = 'formulario.create';
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
            'nombre' => "required|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
            'apellidos' => "required|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
            'email' => 'required|email',
            'pais' => "required|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
            'telefono' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'empresa'=> "required|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
            'cargo'=> "required|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
            'checkbox'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El :attribute es obligatorio.',
            'apellidos.required' => 'Los :attribute son obligatorios',
            'email.required'=> 'El :attribute es obligatorio',
            'pais.required' => 'El :attribute es obligatorio',
            'telefono.required' => 'El :attribute es obligatorio', 
            'telefono.min' => 'El :attribute debe contener por lo menos 9 dígitos',             
            'empresa.required' => 'La :attribute es obligatoria', 
            'cargo.required' => 'El :attribute es obligatorio', 
            'checkbox.required' => 'La autorización es obligatorio', 
            'telefono.regex' => 'Imgrese un :attribute válido',
            'nombre.regex' => 'Ingrese un :attribute válido',
            'apellidos.regex' => 'Ingrese :attribute válidos',
            'pais.regex' => 'Ingrese un :attribute válido',
            'empresa.regex' => 'Ingrese una :attribute válida',
            'cargo.regex' => 'Ingrese un :attribute válido',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre',
            'appellidos' => 'apellidos',
            'email' => 'correo',
            'telefono' => 'celular'
        ];
    }
}
