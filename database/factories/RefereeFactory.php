<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Referee;
use App\Models\User;

class RefereeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Referee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'refFullName' => $this->faker->word,
            'refOrganisation' => $this->faker->regexify('[A-Za-z0-9]{140}'),
            'refPosition' => $this->faker->word,
            'refEmail' => $this->faker->word,
            'refPhone' => $this->faker->regexify('[A-Za-z0-9]{11}'),
            'onRequest' => $this->faker->boolean,
        ];
    }
}
