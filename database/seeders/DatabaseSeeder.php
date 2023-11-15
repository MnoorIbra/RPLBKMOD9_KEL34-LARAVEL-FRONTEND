<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        $user = [[
            'name' => 'Muhammad noor ibrahim',
            'email' => 'ibra@gmail.com',
            'role' => 'Admin',
            'password' => bcrypt('rahasia123')
        ],
        [
            'name' => 'Rizal Firdaus',
            'email' => 'rizal@gmail.com',
            'role' => 'Gudang',
            'password' => bcrypt('rahasia123')
        ],
        [
            'name' => 'Aldo Serena Safiola',
            'email' => 'aldo@gmail.com',
            'role' => 'Akuntan',
            'password' => bcrypt('rahasia123')
        ],
        [
            'name' => 'Muhammad Fadhil Sulthan',
            'email' => 'fadhil@gmail.com',
            'role' => 'Akuntan',
            'password' => bcrypt('rahasia123')
        ]
        ];
        foreach($user as $key => $value) {
            User::create($value);
    }
}
}
