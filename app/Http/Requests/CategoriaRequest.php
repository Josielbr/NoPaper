<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'categoria_nome' => 'required|min:5', 
            'categoria_desc' => 'required|max:255'
         ];
    }

    public function messages(){
        return[
            'required' => 'É obrigatório informar o :attribute da categoria'
        ];
    }
}


