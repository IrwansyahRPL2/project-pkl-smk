<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
                'name' => 'Admin',
                'email' => 'admin@uwais.id',
                'password' => Hash::make('AdminIqro@123'),
                'role' => 1,
                'phone' => '081234567890',
                'address' => 'Jl. Raya No. 123',
                'bio' => 'Admin User',
                'email_verified_at' => now()
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@uwais.id',
                'password' => Hash::make('ManagerIqro@123'),
                'role' => 2,
                'phone' => '081234567890',
                'address' => 'Jl. Raya No. 123',
                'bio' => 'Manager User',
                'email_verified_at' => now()
            ]
        ]);
    }
}
