<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Career::factory()->count(5)->create();
        $careers= [
            'Architecture / Engineering Occupations',
            'Arts, Design, Entertainment, Sports, / Media Occupations',
            'Building / Grounds Cleaning / Maintenance Occupations',
            'Business / Financial Operations Occupations',
            'Community / Social Services Occupations',
            'IT / Computer / Mathematical Occupations',
            'Construction / Extraction Occupations',
            'Education, Training, / Library Occupations',
            'Farming, Fishing, / Livestock/ Forestry Occupations',
            'Food Preparation / Serving Related Occupations',
            'Healthcare Practitioners / veterinary medicine Occupations',
            'Healthcare Support Occupations',
            'Installation, Maintenance Repair Occupations',
            'Legal Occupations',
            'Life, Physical, / Social Science Occupations',
            'Management Occupations',
            'Military Specific Occupations',
            'Office / Administrative Support Occupations',
            'Personal Care / Service Occupations',
            'Production Occupations',
            'Protective Service Occupations',
            'Sales / Marketing Occupations',
        ];

        Career::query()->delete();

        foreach ($careers as $key => $career) {
            Career::create(['name' => $career]);
        }
    }
}
