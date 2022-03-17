<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Education;
use App\Models\User;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'degreeObtainWithCourse' => $this->faker->word,
            'schoolAttended' => $this->faker->word,
            'YearGraduated' => $this->faker->date(),
            'gradeObtain' => $this->faker->word,
        ];
    }
}
