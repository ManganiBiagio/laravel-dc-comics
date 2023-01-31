<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|max:255",
            "description" => "required|string",
            "price" => "required|numeric",
            "series" => "required|string",
            "type"=>"required|max:255"
        ];
    }
    public function messages() {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "Il contenuto del post è obbligatorio",
            "price.required"=>"il prezzo è obbligatorio",
            "price.numeric"=>"il prezzo deve essere un numero",
            "series.required"=>"la serie di appartenenza è un campo obbligatorio",
            "type.required"=>"il tipo di fumetto è un campo obbligatorio"
        ];
    }
}
