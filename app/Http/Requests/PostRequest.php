<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name'=>'required',
            'phone'=>'required',
            'date_exp'=>"required|date",
            'type'=>'required'
            //
        ];
    }

    public function messages()
    {
        return [
            'name.required'     =>  "Veuillez donner votre nom complet",
            "phone.required"    =>  "Veuillez mettre votre numéro de telephone",
            "date_exp.required" =>  "Veuillez selectionner une date",
            "date_exp.date"     =>  "Le format de la date est icorrect",
            'type.required'      =>  "Veuillez choisir votre assurance"
        ];
    }
}
