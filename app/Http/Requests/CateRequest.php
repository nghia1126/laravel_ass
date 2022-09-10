<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bắt buộc nhập tên danh mục',
            'name.min' => 'name tối thiểu 2 ký tự',
            'name.max' => 'name tối đa 50 ký tự',

        ];
    }
}
