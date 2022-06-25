<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            //
            'descripcion' =>$this->faker->text(),
            'estado' => 1,
=======
            'descripcion' => $this->faker->text(),
            'estado' => 1,
            'stock' => 50,
            'alias' => $this->faker->text(),
>>>>>>> 60d728f4f0a521ea367007fcddd72a2ea8226f5d
        ];
    }
}
