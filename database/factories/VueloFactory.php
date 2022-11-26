<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Piloto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vuelo>
 */
class VueloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $piloto_id = Piloto::all();
        return [
            'codigo'    =>  $this->faker->regexify('[A-Z]{5}[0-9]{5}'),
            'origen'    =>  $this->faker->country(),
            'destino'    =>  $this->faker->country(),
            'fecha'     =>  $this->faker->date('Y-m-d'),
            'hora'     =>  $this->faker->time('H:i'),
            'piloto_id' =>  $this->faker->randomElement($piloto_id)->id
        ];
    }
}
