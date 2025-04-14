<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
            'description' => 'Banyakin ngoding bang biar jago jangan banyakin ngocok, 1 baris kodingan lu menyelamatkan 275juta jiwa dari app coretax'
        ]);
        Category::create([
            'name' => 'Sehat Jasmani',
            'slug' => 'sehat-jasmani',
            'description' => 'Sekali lagi bang jangan banyak ngocok, bangun pagi dan olahraga jangan lupa'
        ]);
        Category::create([
            'name' => 'Menanam Pohon',
            'slug' => 'menanam-Pohon',
            'description' => 'tanam pohon bang, indo panas. Lu ga bosen jadi nigga?'
        ]);
        Category::create([
            'name' => 'Buat Liang Lahat',
            'slug' => 'buat-liang-lahat',
            'description' => 'Bruakakaka kakakakakaaka kakakaka kakakaakkaa kakakakakakkak'
        ]);
        Category::create([
            'name' => 'Apa kek lah',
            'slug' => 'apa-kek-lah',
            'description' => 'afgg gggsdgdgg ggggggggggg ggggershre dhheedhdh dfnaehejykglje'
        ]);
    }
}
