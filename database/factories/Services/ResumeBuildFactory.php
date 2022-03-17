<?php

namespace Database\Factories\Services;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Services\ResumeBuild;
use App\Models\Services\ResumeType;
use App\Models\User;

class ResumeBuildFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResumeBuild::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'orderID' => $this->faker->uuid,
            'name' => $this->faker->name,
            'resume_type_id' => ResumeType::factory(),
            'user_id' => User::factory(),
            'completed' => $this->faker->boolean,
            'asDownload' => $this->faker->boolean,
            'paymentSuccessful' => $this->faker->boolean,
            'datePurchased' => $this->faker->dateTime(),
        ];
    }
}
