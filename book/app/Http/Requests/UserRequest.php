<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
            $rules = [];
            $method = $this->route()->getActionMethod();
            switch($this->method()){
                case 'POST':
                    switch($method){
                        case 'add':
                            $rules = [
                                "user_name" => "required",
                                "password" => "required",
                                "email" => "required",
                                "gender" => "required",
                                "role" => "required"
                            ]; break;
                        case 'edit':
                            $rules = [
                                "user_name" => "required",
                                "password" => "required",
                                "email" => "required",
                                "gender" => "required",
                                "role" => "required"
                            ]; break;
                    }default: break;
            }
            return $rules;
    }

    public function messages()
    {
        return [
            "user_name.required" => "Không được để trống tên người dùng",
            "password.required" => "Không được để trống mật khẩu",
            "email.required" => "Không được để trống email",
            "gender.required" => "Không được để trống giới tính",
            "role.required" => "Không được để trống vai trò"
        ];
    }
}
