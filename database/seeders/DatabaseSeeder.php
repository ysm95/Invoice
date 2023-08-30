<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);





        $users = [
            [
                'id'             => 1,
                'name'           => 'Test User',
                'email'          => 'test@mail.com',
                'password'       => '$2y$10$HzhcBU1KWCb4J3zDjL5VZe48uGW3tfnbOFYGU5SyzNjPMdwtBlsze',


            ],

        ];

        User::insert($users);
    }
}
