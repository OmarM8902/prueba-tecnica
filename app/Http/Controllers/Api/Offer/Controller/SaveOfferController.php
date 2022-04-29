<?php

namespace App\Http\Controllers\Api\User\Controller;

use App\Http\Controllers\Api\Offer\Requests\SaveOfferRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SaveOfferController extends Controller
{
    public function __invoke(SaveOfferRequest $request): JsonResponse
    {
        return [];
    }
}
