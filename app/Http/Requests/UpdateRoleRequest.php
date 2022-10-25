<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
            'id' => 'required',
            'name' => 'required|string',
            'user' => 'nullable|array',
            'branch_id' => 'required',
            'permission' => 'required|array|min:1',
            'updated_by' => 'required|string'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'branch_id.required' => 'The branch field is required.',
            'permission.required' => 'At least one :attribute is required.'
        ];
    }
}
