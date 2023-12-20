<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDeveloperRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:100',
            'country' => 'required|string|min:2|max:100',
            'found_date' => 'nullable',
            'founder' => 'required|string|min:1|max:100',       
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "廠商名 為必填",
            "name.min" => "廠商名 至少需2個字元",
            "country.required" => "註冊國籍 為必填",
            "country.min" => "註冊國籍 至少需2個字元",
            "founder.required" => "創辦人 為必填",
            "founder.min" => "創辦人 至少需1個字元",
        ];
    }    
}