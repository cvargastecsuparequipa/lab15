<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->text(),
            'email' => $this->faker->freeEmail(),
            'categoria_id' => '629a4321b91a00001d007f95',
            'estado' => '1',
        ];
    }
}
