<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MediaHandle;
use App\Models\SocialHandle;
use App\Models\User;

class SocialHandleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialHandle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'media_handle_id' => MediaHandle::factory(),
            'socialLinkUrl' => $this->faker->word,
        ];
    }
}
