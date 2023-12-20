<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGamesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name'=>'required',
            'country'=>   'nullable',
            'found_date'=>'nullabe',
            'founder'=>'nullable',
            //
        ];
    }
    public function messages()
    {

        return [
            'name.required'=>'Name field cannot be null.',
            //
        ];
    }
}

