<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class crearLibrorequest extends Request
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
            //
        'nombre' => 'required',
        'autor' => 'required',
        'imagen' => 'required',
        'extracto1' => 'required',
        'extracto2' => 'required',
        'extracto3' => 'required'
        ];
    }
}
