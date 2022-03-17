<?php

namespace Database\Factories\Services;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Services\Payment;
use App\Models\Services\ResumeBuild;
use App\Models\User;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'resume_build_id' => ResumeBuild::factory(),
            'AmountPaid' => $this->faker->randomNumber(),
            'paymentStatus' => $this->faker->boolean,
        ];
    }
}
