<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValBinhluanAdd extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'hoten' => 'required|min:2',
            'com_text' => 'required|min:3'
        ];
    }
    public function messages(){
            $messages = [
                'hoten.required'=>'Họ tên không được để trống!',
                'com_text.required'=>'Nội dung không được để trống.'
            ];
        return $messages;
    }
}
