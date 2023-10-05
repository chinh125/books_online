<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                            "category_name" => "required"
                        ];
                        break;
                    case 'edit':
                        $rules = [
                            "category_name" => "required"
                        ];
                        break;
                    default:
                    break;
                }
                default: break;
        }
        return $rules;
    }

    public function messages()
    {
        return [
            "category_name.required" => "Không được bỏ trống danh mục"
        ];
    }
}
