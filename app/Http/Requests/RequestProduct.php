<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'pro_name' => 'required|unique:products,pro_name,'.$this->id,
            'pro_category_id' => 'required',
            'pro_price' => 'required',
            'pro_description' => 'required',
            'pro_content' => 'required',
            'pro_category_id' => 'required',

        ];
    }

    public function messages()
    {
        return
        [
            'pro_name.required' => 'Trường này không thể bỏ trống',
            'pro_name.unique' => 'Trường này đã bị trùng',
            'pro_category_id.required' => 'Trường này không thể bỏ trống',
            'pro_price.required' => 'Trường này không thể bỏ trống',
            'pro_description.required' => 'Trường này không thể bỏ trống',
            'pro_content.required' => 'Trường này không thể bỏ trống',

        ];
    }
}
