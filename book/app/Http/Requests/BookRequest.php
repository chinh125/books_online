<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
                            "title"=> "required",
                            "price"=> "required",
                            "release_time"=> "required",
                            "image"=> "required",
                            "description_book"=> "required",
                            "quantity"=> "required",
                            "cate_id"=> "required"
                        ];
                        break;
                    case 'edit':
                        $rules = [
                            "title"=> "required",
                            "price"=> "required",
                            "release_time"=> "required",
                            "description_book"=> "required",
                            "quantity"=> "required",
                            "cate_id"=> "required"
                        ];
                        break;
                    default: break;
        }
        default: break;
    }
    return $rules;
    }
    public function messages()
    {
        return [
            "title.required" => "Không được bỏ trống tiêu đề",
            "price.required" => "Không được bỏ trống giá",
            "release_time.required" => "Không được bỏ trống thời gian phát hành",
            "image.required" => "Không được bỏ trống hình ảnh",
            "description_book.required" => "Không được bỏ trống mô tả sách",
            "quantity.required" => "Không được bỏ trống số lượng",
            "cate_id.required" => "Không được bỏ trống danh mục",
        ];
    }
}

