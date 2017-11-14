<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public $redirect = "/#inscription";

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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'nullable|email',
            'phone'=>'required',
            "wilaya"    =>"required",
            'date_exp'=>"required|date",
            'type'=>[ 'required', Rule::in([-1, 6000, 12000, 18000]) ]  
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'   =>  "Veuillez donner votre nom",
            'last_name.required'    =>  "Veuillez donner votre prénom",
            'email.required'        =>  "Veuillez spécifier votre email",
            'email.email'           =>  "Le format de l'email est incorrect",
            "phone.required"        =>  "Veuillez mettre votre numéro de telephone",
            "date_exp.required"     =>  "Veuillez selectionner une date",
            "date_exp.date"         =>  "Le format de la date est incorrect",
            'type.required'         =>  "Veuillez choisir votre assurance",
            'type.in'               =>  "Le type d'assurance est invalide!"
        ];
    }
}
