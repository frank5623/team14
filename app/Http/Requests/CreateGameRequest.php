<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGameRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:191',
            'publisher' => 'required|string|min:2|max:191',
            'd_id' => 'required',
            'release_date' => 'nullable',
            'price' => 'required|numeric|min:0|max:10000',
            'peak_player' => 'required|numeric|min:0|max:1000000',
            'gametype' => 'required',          
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "遊戲名稱 為必填",
            "name.min" => "遊戲名稱 至少需1個字元",
            "publisher.required" => "發行商 為必填",
            "tid.required" => "開發商編號 為必填",
            "price.required" => "遊戲價錢(TWD) 為必填",
            "price.numeric" => "遊戲價錢(TWD) 必須為數字",
            "price.min" => "遊戲價錢(TWD) 範圍必須介於0~10000之間",
            "price.max" => "遊戲價錢(TWD) 範圍必須介於0~10000之間",
            "peak_player.required" => "歷史尖峰人數 為必填",
            "peak_player.numeric" => "歷史尖峰人數 必須為數字",
            "peak_player.min" => "歷史尖峰人數 範圍必須介於0~1000000之間",
            "peak_player.max" => "歷史尖峰人數 範圍必須介於0~1000000之間",
            "gametype.required" => "遊戲類型 為必填",
        ];
    }    
}
