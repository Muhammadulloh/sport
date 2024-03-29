<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function attributes()
    {
        return [
            'title' => 'Sarlavha',
            'short_content' => 'Qisqacha mazmun',
            'content' => 'Maqola',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:225',
            'short_content' => 'required',
            'content' => 'required',
        ];
    }
}
