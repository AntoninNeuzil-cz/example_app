<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\Author::factory(10)->create();
//
        $values = DB::table('authors')->insert([
            'full_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'updated_at' => \now(),
            'created_at' => \now(),
        ]);

        DB::table('items')->insert([
            'name' => Str::random(10),
            'description' => Str::random(20),
            'type' => 'book',
            'author_id' => rand(1,3),
            'updated_at' => \now(),
            'created_at' => \now(),
        ]);
    }
}
