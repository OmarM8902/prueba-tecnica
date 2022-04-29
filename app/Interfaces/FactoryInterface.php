<?php

namespace App\Interfaces;

interface FactoryInterface
{
    public static function createFromArray(array $data): array;

    public static function create(array $attributes): object;
}
