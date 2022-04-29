<?php

namespace App\Http\Controllers\Api\User\DTOs\Factories;

use App\Http\Controllers\Api\User\DTOs\SaveUserDto;
use App\Interfaces\FactoryInterface;

class SaveUserFactory implements FactoryInterface
{
    public static function createFromArray(array $data): array
    {
        return [];
    }

    public static function create(array $attributes): object
    {
        $saveUserDto = new SaveUserDto();
        $saveUserDto->setEmail($attributes['email']);
        $saveUserDto->setName($attributes['name']);
        $saveUserDto->setDocumentType($attributes['document_type']);
        $saveUserDto->setDocumentNumber($attributes['document_number']);

        return $saveUserDto;
    }
}
