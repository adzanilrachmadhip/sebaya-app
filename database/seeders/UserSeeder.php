<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => Carbon::now(),
                'is_deleted' => 0
            ],
            [
                'role_id' => 2,
                'username' => 'anggota',
                'email' => 'anggota@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => Carbon::now(),
                'is_deleted' => 0
            ],
        ]);
    }
}
