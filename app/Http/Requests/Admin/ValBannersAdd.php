<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValbannersAdd extends FormRequest {
    public function authorize()
    {
        return true;
    }
    public function rules(){
        return [
            'ban_name' => 'required|min:2',
        ];
    }
    public function messages(){
            $messages = [
                'ban_name.required'=>'Tên banner không được để trống!',
            ];
        return $messages;
    }
}
