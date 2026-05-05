<?php

namespace Database\Factories;

use App\Models\Modulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Modulo>
 */
class ModuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(4),
            'codigo' => $this->faker->unique()->randomNumber(4, false),
            'horas_totales' => $this->faker->randomDigit(),
            'descripcion' => $this->faker->text(100)
        ];
    }
}
