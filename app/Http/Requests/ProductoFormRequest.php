<?php

namespace sisVentas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
            
            'CodigoBarra'=> 'requerided|max:25',
            'Descripcion'=> 'requerided|max:100',
            'UMedida'=> 'requerided|max:20',
            'Precio1'=> 'requerided|max:11',
            'Precio2'=> 'max:11',
            'Precio3'=> 'max:11',
            'Precio4'=> 'max:11',
            'Stock_Minimo'=>'requerided|max:11',
            'Costo'=>'requerided|max:11',
        ];
    }
}
