<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => $this->faker->numberBetween(1,5000),
            'cargo' => $this->faker->name(),
            'fecha_ingreso'=> $this->faker->date(),
            'depto'=> $this->faker->name(),
            'created_by'=>1,
            'salario'=> $this->faker->numberBetween(12000,150000),
            'persona_id'=> $this->faker->numberBetween(1,5000),
            ];
    }
}
