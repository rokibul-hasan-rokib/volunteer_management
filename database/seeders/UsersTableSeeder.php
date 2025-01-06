<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@one.com',
                'password' => Hash::make('12345678'),
                'phone' => '1234567890',
                'address' => '123 Admin Street',
                'role' => 'admin',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('password123'),
                'phone' => '0987654321',
                'address' => '456 User Avenue',
                'role' => 'user',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Volunteer User',
                'email' => 'volunteer@example.com',
                'password' => Hash::make('password123'),
                'phone' => null,
                'address' => '789 Volunteer Lane',
                'role' => 'volunteer',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
