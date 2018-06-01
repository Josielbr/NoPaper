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
            'produto_nome' => 'required|min:3', 
            'produto_desc' => 'required|max:255',
            'produto_valor' => 'required|numeric',
            'produto_qtd' => 'required|numeric'
         ];
    }

    public function messages(){
        return[
            'required' => 'É obrigatório informar o :attribute do produto'
        ];
    }
}


