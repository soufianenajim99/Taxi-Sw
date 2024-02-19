<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\Passenger;
use App\Models\Traject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_id'=>Driver::factory(),
            'passenger_id'=>Passenger::factory(),
            'traject_id'=> Traject::factory(),
            'departure_date'=>fake()->date,
            'payement_type' => fake()->word,
            'favorite' => 0,
        ];
    }
}