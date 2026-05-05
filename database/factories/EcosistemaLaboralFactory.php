<?php

namespace Database\Factories;

use App\Models\EcosistemaLaboral;
use App\Models\Modulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EcosistemaLaboral>
 */
class EcosistemaLaboralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'modulo_id' => Modulo::factory(),
            'nombre' => $this->faker->sentence(3),
            'codigo' => $this->faker->unique()->bothify('####'),
            'descripcion' => $this->faker->paragraph(),
            'activo' => true,
        ];
    }
}
