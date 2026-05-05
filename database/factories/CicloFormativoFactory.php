<?php

namespace Database\Factories;

use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CicloFormativo>
 */
class CicloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'familia_profesional_id' => FamiliaProfesional::factory(),
            'nombre' => $this->faker->word(),
            'codigo' => $this->faker->unique()->randomNumber(8, true),
            'grado' => $this->faker->randomElement(['GB', 'GM', 'GS', 'CE'])
        ];
    }
}
