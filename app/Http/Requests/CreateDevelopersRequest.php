<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDevelopersRequest extends FormRequest
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
            'publisher'=>   'required',
            'd_id'=>'required|numeric',
            'release_date'=>'required',
            'price'=>'nullable|numeric',
            'peak_player'=>'nullable|numeric',
            'gametype'=>'nullable',
            //
        ];
    }
    public function messages()
    {

        return [
            'name.required'=>'Name field cannot be null.',
            'publisher.required'=> 'Publisher field cannot be null.',
            'd_id.required'=>'Developers field cannot be null.',
            'd_id.numeric' =>'The company name can only be digital.',
            'release_date.required'=>'Release date cannot be null.',
            'price.numeric'=>'Price cannot be null.',
            'peak_player.numeric'=>'Peak_player cannot be string.',
            'gametype'=>'nullable',
            //
        ];
    }
}
