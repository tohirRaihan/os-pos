<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EmployeeRequest extends FormRequest
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
        $user_id = $this->employee ? $this->employee->id : '';
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user_id.',id',
            'password' => 'required',
            'phone' => 'required|unique:profiles,phone,' . $user_id . ',user_id',
            'employee_id' => 'required|unique:employees,employee_id,' . $user_id . ',user_id'
        ];
    }
}
