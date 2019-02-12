<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValDangkyAdd extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'hoten' => 'required|min:2',
            'dienthoai' => 'required|min:2',
        ];
    }
    public function messages(){
            $messages = [
                'hoten.required'=>'Họ tên không được để trống!',
                'dienthoai.required'=>'Số điện thoại không được để trống!',
            ];
        return $messages;
    }
}
