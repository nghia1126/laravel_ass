<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //điều kiện phân quyền cho việ gửi yêu cầu
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
            'price'=> 'required|min:4|max:9',
            'desc'=> 'required|min:6'
        ];
    }
    //hàm định nghĩa các mess lỗi của rules
    function messages()
    {
        return[
            'name.required'=> 'Tên sản phẩm bắt buộc nhập',
            'name.min'=> 'Tên sp tên tối thiểu 6 kí tự.',
            'name.max'=> 'Độ dài tên tối đa 20 kí tự.',
            'price.required'=> 'Giá bắt buộc nhập',
            'price.max'=> 'Độ dài tối thiểu 9 kí tự',
            'price.min'=> 'Giá tối thiểu 4 kí tự',
            'desc.required'=> 'Mô tả bắt buộc là số',
            'desc.min'=> 'Độ dài tối thiểu 4 kí tự',
        ];
    }
}
