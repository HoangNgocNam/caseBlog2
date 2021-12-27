<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            "title" => "required|min:6|max:200",
            "content" => "required",
            "user_id" => "required",
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ];
    }

    public function messages()
    {
        return [
            "title.required"=>"Trường này không được để trống",
            "title.min"=>"Trường này tối thiểu 6 ký tự",
            "title.max"=>"Trường này tối đa 200 ký tự",
            "content.required"=>"Trường này không được để trống",
            "user_id.required"=>"Trường này không được để trống",
            "name.required"=>"Trường này không được để trống",
            "email.required"=>"Trường này không được để trống",
            "password.required"=>"Trường này không được để trống",
        ];
    }
}
