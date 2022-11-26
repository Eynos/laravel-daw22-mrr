<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vuelo;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasaje>
 */
class PasajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $vuelo_id = Vuelo::all();
        return [
            'nombre' => $this->faker->firstname(),
            'apellidos' => $this->faker->lastname(),
            'vuelo_id' => $this->faker->randomElement($vuelo_id)->id,
            'precio' => $this->faker->numberBetween(5, 500),
        ];
    }
}
