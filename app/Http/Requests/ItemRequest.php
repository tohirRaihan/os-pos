<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'supplier_id' => 'required',
            'sku' => 'required|string|min:3|max:255',
            'cost_price' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'reorder_level' => 'required|numeric',
            'quantity' => 'required|numeric',
            'unit' => 'required|string'
            // 'image' => 'required|mimes:jpg,bmp,png'
        ];
    }
}
