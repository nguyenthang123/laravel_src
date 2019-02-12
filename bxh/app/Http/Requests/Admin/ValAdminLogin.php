<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValAdminLogin extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'adm_name' => 'required|min:2',
            'adm_password' => 'required|min:3'
        ];
    }
    public function messages(){
            $messages = [
                'adm_name.required'=>'Data name không được để trống!',
                'adm_password.required'=>'create_at không được để trống.'
            ];
        return $messages;
    }
}
