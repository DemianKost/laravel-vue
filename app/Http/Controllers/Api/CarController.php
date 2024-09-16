<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Actions\CreateCar;
use App\Http\Controllers\Controller;
use App\Http\Requests\Car\StoreCarRequest;
use Illuminate\Http\JsonResponse;

class CarController extends Controller
{
    /**
     * @param StoreCarRequest $request
     * @return JsonResponse
     */
    public function store(StoreCarRequest $request, CreateCar $createCar): JsonResponse
    {
        $data = $request->validated();

        $createCar->handle(attributes: $data);

        return response()
            ->json(
                data: [
                    'success' => true,
                    'message' => 'Create a new car',
                ],
                status: 201
            );
    }
}
