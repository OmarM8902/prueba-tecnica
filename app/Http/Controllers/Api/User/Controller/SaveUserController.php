<?php

namespace App\Http\Controllers\Api\User\Controller;

use App\Http\Controllers\Api\User\DTOs\Factories\SaveUserFactory;
use App\Http\Controllers\Api\User\Requests\SaveUserRequest;
use App\Http\Controllers\Api\User\Services\SaveUserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SaveUserController extends Controller
{
    public function __invoke(SaveUserRequest $request): JsonResponse
    {
        $payload = SaveUserFactory::create($request->validated());

        return response()->json((new SaveUserService())->save($payload), Response::HTTP_CREATED);
    }
}
