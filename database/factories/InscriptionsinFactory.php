<?php

namespace Database\Factories;

use App\Models\Inscriptionsin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InscriptionsinFactory extends Factory
{
    protected $model = Inscriptionsin::class;

    public function definition()
    {
        return [
			'fecha' => $this->faker->name,
			'tipo_pag' => $this->faker->name,
			'doc_pago' => $this->faker->name,
			'total' => $this->faker->name,
			'id_juego' => $this->faker->name,
			'id_participante' => $this->faker->name,
        ];
    }
}
