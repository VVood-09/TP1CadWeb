<?php

namespace Database\Factories;

use App\Models\CadWebTp1Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class CadWebTp1EtudiantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CadWebTp1Etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // https://stackoverflow.com/questions/51971930/excluding-prefixes-and-suffixes-from-fakername
            "nom" => $this->faker->firstName($gender = null)." ".$this->faker->lastName($gender = null),
            "adresse" => $this->faker->address,
            "telephone" => $this->faker->phoneNumber,
            "courriel" => $this->faker->unique()->safeEmail,
            "date_de_naissance" => $this->faker->date($format = 'Y-m-d', $max = '2007-01-01'),
            // https://fakerphp.github.io/formatters/numbers-and-strings/
            "ville_id" => $this->faker->numberBetween(1, 15),
        ];
    }
}
