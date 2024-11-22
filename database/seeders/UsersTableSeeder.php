<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'mejbaulmubin786@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => '1',
            ],
            // Instractor
            [
                'name' => 'instructor',
                'username' => 'instructor',
                'email' => 'instructor@instructor.com',
                'password' => Hash::make('111'),
                'role' => 'instructor',
                'status' => '1',
            ],
            // user or customer
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => '1',
            ],
        ]);
    }
}
