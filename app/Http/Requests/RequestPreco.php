<?php

namespace cotagil\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPreco extends FormRequest
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
            'preco' => 'required',
            'idcotacao' => 'required'
        ];
    }
}
