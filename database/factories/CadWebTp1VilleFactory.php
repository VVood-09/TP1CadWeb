<?php

namespace Database\Factories;

use App\Models\CadWebTp1Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class CadWebTp1VilleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CadWebTp1Ville::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->city
        ];
    }
}
