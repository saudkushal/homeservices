<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customername' => 'required|string|max:50',
            'review' => 'required|string|max:100',
            'rating' => 'required|integer|between:1,5',
            'photo' => 'required|image|mimes:png,jpg,jpeg',
        ];
    }
}
