<?php

namespace App\Http\Controllers\Api\Offer\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveOfferRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'user_id' => 'required|array',
            'active' => 'required|integer'
        ];
    }
}
