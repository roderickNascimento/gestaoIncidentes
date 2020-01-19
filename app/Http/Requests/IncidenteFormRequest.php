<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidenteFormRequest extends FormRequest
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
            'titulo'=>'required',
            'id_criticidade'=>'required|numeric',
            'status'=>'required|numeric|min:1|max:2',
            'id_tipo'=>'required|numeric',
            'descricao'=>'required',
        ];
    }

    public function messages(){

        return [
            'titulo.required'=>'Titulo é um campo obrigatório',
            'id_criticidade.required'=>'Criticidade é um campo obrigatório',
            'id_criticidade.numeric'=>'Apenas numeros são aceitos como nivel de criticidade',
            'status.required'=>'Status é um campo obrigatório',
            'status.numeric'=>'Apenas numeros são aceitos como nivel de criticidade',
            'id_tipo.required'=>'Tipo é um campo obrigatório',
            'id_tipo.numeric'=>'Apenas numeros são aceitos como tipo',
            'descricao.required'=>'Descricao é um campo obrigatório',
        ];
    }
}
