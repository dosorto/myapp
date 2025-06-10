<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Persona;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    protected $model = Persona::class;
    public function definition(): array
    {
        return [
            'primer_nombre' => $this->faker->name(),
            'primer_apellido' => $this->faker->lastName(),
            'telefono'=> $this->faker->phoneNumber(),
            'direccion'=> $this->faker->address(),
            'dni'=> $this->faker->unique()->numerify('#########'),
            'sexo'=> $this->faker->randomElement(["F","M"]),
            'fecha_nacimiento'=>$this->faker->date(),
            ];
    }
}
