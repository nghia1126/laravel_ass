<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=> 'required|min:6|max:50',
            'email'=> 'required|min:6|email',
            'password'=> 'required|min:6|max:50'
        ];
    }
    //hàm định nghĩa các mess lỗi của rules
    function messages()
    {
        return[
            'name.required'=> 'Tên người dùng bắt buộc nhập',
            'name.min'=> 'Độ dài tên tối thiểu 6 kí tự.',
            'name.max'=> 'Độ dài tên tối đa 50 kí tự.',
            'email.required'=> 'Email người dùng bắt buộc nhập'
        ];
    }
}
