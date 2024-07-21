<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    protected $model = Usuarios::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellido' => $this->faker->lastName,
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
