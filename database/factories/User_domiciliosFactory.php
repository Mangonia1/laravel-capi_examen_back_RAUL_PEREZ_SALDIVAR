<?php

namespace Database\Factories;

use App\Models\User_domicilios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class User_domiciliosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User_domicilios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'domicilio' => $this->faker->address,
            'numero_exterior' => $this->faker->numberBetween($min = 1, $max = 1000),
            'colonia' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'cp' => $this->faker->numberBetween($min = 1, $max = 1000),
            'ciudad' => $this->faker->city
        ];
    }

}
