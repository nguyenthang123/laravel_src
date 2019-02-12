<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValConfigsAdd extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'con_name' => 'required|min:2',
        ];
    }
    public function messages(){
            $messages = [
                'con_name.required'=>'Tên configs không được để trống!',
            ];
        return $messages;
    }
}
