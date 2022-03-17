<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(ResumeTypeSeeder::class);
        // $this->call(CareerSeeder::class);
       // $this->call(JobListSeeder::class);
        $this->call(SkillBankSeeder::class);
    }
}
