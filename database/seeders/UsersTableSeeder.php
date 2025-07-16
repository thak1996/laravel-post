<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => bcrypt('Password@123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Normal User',
                'email' => 'user@example.com',
                'password' => bcrypt('Password@123'),
                'role' => 'user',
            ],
            [
                'name' => 'Visitor User',
                'email' => 'visitor@example.com',
                'password' => bcrypt('Password@123'),
                'role' => 'user',
            ]
        ];

        DB::table('users')->insert($users);
    }
}
