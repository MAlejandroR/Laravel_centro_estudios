<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dni = $this->faker->randomNumber(7);
        $dni = $dni . strtoupper($this->faker->randomLetter());
        return [
            //
            "nombre" => $this->faker->name(),
            "direccion" => $this->faker->address(),
            "dni" => $dni,
            "email" => $this->faker->email(),
        ];
    }
}
