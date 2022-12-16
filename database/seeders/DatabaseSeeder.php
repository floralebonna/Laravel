<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'Phone Number' => '1111111111',
            'Address' => 'Paingan',
            'Username' => 'user123',
            'password' => bcrypt('password'),
            'Admin' => 0
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'Admin@example.com',
            'Phone Number' => '222222222',
            'Address' => 'Paingan',
            'Username' => 'Admin',
            'password' => bcrypt('password'),
            'Admin' => 1
        ]);
    }
}
