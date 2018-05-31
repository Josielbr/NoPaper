<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nome' => 'required|min:3', 
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
         ];
    }

    public function messages(){
        return[
            'required' => 'É obrigatório informar o :attribute do produto'
        ];
    }
}
