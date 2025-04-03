<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Course::create([
            'title' => 'Laravel 8',
            'short_description' => 'Laravel 8 for beginners',
            'description' => 'Laravel 8 for beginners',
            'price' => 100,
            'is_active' => 1,
        ]);
    }
}
