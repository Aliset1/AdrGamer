<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'reglas' => $this->faker->name,
			'valor' => $this->faker->name,
			'id_categoria' => $this->faker->name,
			'id_aula' => $this->faker->name,
        ];
    }
}
