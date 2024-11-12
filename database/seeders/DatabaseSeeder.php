<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\JobType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        collect(['Full Time', 'Part Time', 'Internship', 'Freelance', 'Remote'])->each(function ($type) {
            JobType::factory()->create(['name' => $type]);
        });


        collect(['Accountant', 'Human Resources', 'IT', 'Marketing', 'Sales'])->each(function ($category) {
            Category::factory()->create(['name' => $category]);
        });


    }
}
