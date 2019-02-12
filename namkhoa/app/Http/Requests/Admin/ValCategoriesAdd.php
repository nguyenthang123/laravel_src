<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValCategoriesAdd extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'cat_name' => 'required|min:2',
        ];
    }
    public function messages(){
            $messages = [
                'cat_name.required'=>'Tên danh mục không được để trống!',
            ];
        return $messages;
    }
}
