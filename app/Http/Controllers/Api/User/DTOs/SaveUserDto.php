<?php

namespace App\Http\Controllers\Api\User\DTOs;


class SaveUserDto
{
    private string $email;
    private string $name;
    private int $documentType;
    private int $documentNumber;


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDocumentType(): int
    {
        return $this->documentType;
    }

    public function setDocumentType(int $documentType): void
    {
        $this->documentType = $documentType;
    }


    public function getDocumentNumber(): int
    {
        return $this->documentNumber;
    }

    public function setDocumentNumber(int $documentNumber): void
    {
        $this->documentNumber = $documentNumber;

    }
}
