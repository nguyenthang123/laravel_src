<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValAdminEdit extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'adm_name' => 'required|min:2',
        ];
    }
    public function messages(){
            $messages = [
                'adm_name.required'=>'Data name không được để trống!',
            ];
        return $messages;
    }
}
