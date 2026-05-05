<?php

namespace Database\Factories;

use App\Models\Matricula;
use App\Models\Modulo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id' => User::factory()->create(),
            'modulo_id' => Modulo::factory()->create()
        ];
    }
}
