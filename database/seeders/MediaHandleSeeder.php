<?php

namespace Database\Seeders;

use App\Models\MediaHandle;
use Illuminate\Database\Seeder;

class MediaHandleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaHandle::factory()->count(5)->create();
    }
}
