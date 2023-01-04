<?php

namespace Database\Factories;

use App\Models\Inscriptionsgr;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InscriptionsgrFactory extends Factory
{
    protected $model = Inscriptionsgr::class;

    public function definition()
    {
        return [
			'fecha' => $this->faker->name,
			'tipo_pag' => $this->faker->name,
			'doc_pago' => $this->faker->name,
			'total' => $this->faker->name,
			'id_juego' => $this->faker->name,
			'id_equipo' => $this->faker->name,
        ];
    }
}
