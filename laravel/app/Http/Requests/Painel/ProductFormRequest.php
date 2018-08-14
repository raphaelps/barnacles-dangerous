<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name'          => 'required|min:3|max:100',
            'number'        => 'required|numeric',
            'category'      => 'required',
            'descripton'    => '|min:3|max:1000',   
            ];
    }
    
    public function messages(){
        
        return [
            'name.required'=>'O campo nome é de preenchimento obrigatorio',
            'name.min'=>'O campo nome deve conter ao menos 3 letras',
            'number.numeric'=>'O campo numero aceita somente numeros',
            'number.required'=>'O campo numero é de preenchimento obrigatorio',
            'category.required'=>'Deve ser selecionada uma categoria',
            //'descripton.min'=>'O campo descrição deve conter ao menos 3 letras',
        ];
        
        
    }

}
