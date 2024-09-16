<?php

namespace App\Http\Actions;
use App\Models\Car;

class CreateCar
{
    /**
     * @param array $attributes
     * @return void
     */
    public function handle(array $attributes): void
    {
        Car::create(
            attributes: $attributes
        );
    }
}