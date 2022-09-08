<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            "postal_code" => "required|string",
            "street_name" => "required|string",
            "door_number" => "nullable|numeric",
            "benefits" => "required|in:Yes,No",
            "own_home" => "required|in:Yes,No",
            "before_2005" => "required|in:Yes,No",
            "radiators" => "required|in:Yes,No",
            "heated_type" => "required|string",
            "number_of_bedrooms" => "required|numeric",
            "property_type" => "required|string",
            "insulation" => "required|array",
            "name" => "required|string",
            "email" => "required|email",
            "phone_number" => "required|string"
        ];
    }
}
