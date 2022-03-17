<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Experience;
use App\Models\User;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'companyName' => $this->faker->word,
            'positionHeld' => $this->faker->regexify('[A-Za-z0-9]{180}'),
            'fromYear' => $this->faker->date(),
            'toYear' => $this->faker->date(),
            'isCurrentJob' => $this->faker->boolean,
        ];
    }
}
