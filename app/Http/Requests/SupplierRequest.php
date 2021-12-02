<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SupplierRequest extends FormRequest
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
        $supplier_id = $this->supplier ? $this->supplier->id : '';
        return [
            'name' => 'required',
            'company_name' => 'required',
            'account_number' => 'required',
            'email' => 'required|email|unique:suppliers,email,'.$supplier_id.',id',
            'phone' => 'required|unique:suppliers,phone,' . $supplier_id . ',id'
        ];
    }
}
