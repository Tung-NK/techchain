<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            // 'image.*' => 'required|image|mimes:png,jpg,jped,svg,gif|max:2048',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'image.*.required' => 'Không được bỏ trống ảnh sản phẩm',
            // 'image.*.image' => 'File gửi lên không phải là ảnh',
            // 'image.*.mimes' => 'File gửi lên không phải là ảnh',
            // 'image.*.max' => 'File vượt quá dung lượng cho phép',
            'name.required' => 'Không được bỏ trống tên sản phẩm',
            'price.required' => 'Không được bỏ trống giá sản phẩm',
            'description.required' => 'Không được bỏ trống mô tả sản phẩm',
            'category_id.required' => 'Không được bỏ trống danh mục sản phẩm',
        ];
    }
}
