<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TcambioRequest extends FormRequest
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
            'tc_venta' => 'required',
            'tc_compra' => 'required'
        ];
    }


    public function message()
    {
        return [ 'tc_venta' => 'Se necesita un precio de venta'];
        return [ 'tc_compra' => 'Se necesita un precio de compra'];

    }
}
