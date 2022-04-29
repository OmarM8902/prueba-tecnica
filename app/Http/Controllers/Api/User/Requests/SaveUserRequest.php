<?php

namespace App\Http\Controllers\Api\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'name' => 'required|string|min:10|max:100',
            'document_type' => 'required|integer',
            'document_number' => 'required|integer'
        ];
    }
}
