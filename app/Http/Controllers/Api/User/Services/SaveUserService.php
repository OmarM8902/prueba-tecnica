<?php

namespace App\Http\Controllers\Api\User\Services;

use App\Http\Controllers\Api\User\DTOs\SaveUserDto;
use App\Models\User;
use Illuminate\Http\Response;

class SaveUserService
{
    public function save(SaveUserDto $payload): array
    {
        $user = new User();
        $user->email = $payload->getEmail();
        $user->name = $payload->getName();
        $user->document_type = $payload->getDocumentType();
        $user->document_number = $payload->getDocumentNumber();

        $user->save();

        return ['status' => Response::HTTP_CREATED, 'message' => 'Guardado exitosamente'];
    }
}
