<?php

namespace Database\Factories;

use App\Models\ride;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class rideFactory extends Factory
{
    protected $model = ride::class;

    public function definition(): array
    {
        return [
            'start_coordinates' => $this->faker->localCoordinates(),
            'start_address' => $this->faker->address(),
            'end_coordinates' => $this->faker->localCoordinates(),
            'end_address' => $this->faker->address(),
            'seats' => $this->faker->randomNumber(),
            'datetime' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
