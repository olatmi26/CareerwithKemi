<?php

namespace Database\Seeders;

use App\Models\Services\ResumeType;
use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Support\Str;

class ResumeTypeSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ResumeType::factory()->count(5)->create();
       ResumeType::query()->delete();
        
        ResumeType::create([
            'type' => 'Fresh Graduate (1 - 2 years)',
            'cost' => 2000,
            
        ]);
        ResumeType::create([
            'type' => 'Experienced work force',
            'cost' => 5000,            
        ]);
        

        // return [
        //     'type' => $this->faker->word,
        //     'cost' => $this->faker->randomNumber(),
        // ];
    }
}
