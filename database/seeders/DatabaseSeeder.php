<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Volunteer;
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

        User::factory()->create([
            'name' => 'Nopaleon',
            'username' => 'nopaleon',
            'password' => bcrypt('12345'),
            'role' => 'administrator',
            'email' => 'nopal@gmail.com',
        ]);

        $volunteers = Volunteer::factory(20)->create();
        $categories = Category::factory()
        ->count(10)
        ->sequence(fn () => ['title' => fake()->unique()->word])
        ->create();
    
        foreach ($volunteers as $volunteer) {
            $volunteer->categories()->attach(
                $categories->random(rand(1, 10))->pluck('id')->toArray()
            );
        }    }
}
