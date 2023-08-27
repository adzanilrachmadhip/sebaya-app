<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'Administrator',
                'created_at' => Carbon::now(),
                'is_deleted' => 0
            ],
            [
                'role_name' => 'Anggota',
                'created_at' => Carbon::now(),
                'is_deleted' => 0
            ],
        ]);
    }
}
