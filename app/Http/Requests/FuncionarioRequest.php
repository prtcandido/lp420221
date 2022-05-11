<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'endereco' => 'required|max:80',
            'dataNascimento' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome tamanho máximo 100',
            'endereco.*' => 'Endereço obrigatório tamanho máximo 80',
            'dataNascimento.*' => 'Data nascimento é obrigatória'
        ];
    }

}
