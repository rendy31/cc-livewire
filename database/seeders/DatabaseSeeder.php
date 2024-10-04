<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Sally Pobas',
        //     'email' => 'cc@stikessuakainsan.ac.id',
        //     'password' => BCRYPT('ccsuakainsan'),
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);

    }
}
