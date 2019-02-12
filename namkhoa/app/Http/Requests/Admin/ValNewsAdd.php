<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValNewsAdd extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'new_name' => 'required|min:2',
        ];
    }
    public function messages(){
            $messages = [
                'new_name.required'=>'Data name không được để trống!',
            ];
        return $messages;
    }
}
