<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Lesson::factory(10)->create();
    }
}
