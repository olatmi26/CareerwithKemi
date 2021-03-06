<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'name' => $this->faker->name,
            'qtyInStock' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(),
            'image' => $this->faker->word,
            'availability' => $this->faker->boolean,
            'discountAllow' => $this->faker->randomNumber(),
        ];
    }
}
