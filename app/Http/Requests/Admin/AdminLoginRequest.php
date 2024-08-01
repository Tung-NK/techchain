<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được bỏ trống tên',
            'name.string' => 'Tên phải là một chuỗi kí tự',
            'email.required' => 'Không được bỏ trống email',
            'email.email' => 'Nhập đúng định dạng email',
            'password.required' => 'Không được bỏ trống password',
            'role.required' => 'Không được bỏ trống role',
        ];
    }
}
