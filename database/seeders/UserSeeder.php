<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'superadmin@example.com',
                'role' => 'superadmin',
                'status' => 'active',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Admin Staff',
                'username' => 'adminstaff',
                'email' => 'adminstaff@example.com',
                'role' => 'adminstaff',
                'status' => 'active',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dokter Andi',
                'username' => 'doctor',
                'email' => 'doctor@example.com',
                'role' => 'doctor',
                'status' => 'active',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Radiografer Budi',
                'username' => 'radiografer',
                'email' => 'radiografer@example.com',
                'role' => 'radiografer',
                'status' => 'active',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Radiografer Rahmat',
                'username' => 'rahmat',
                'email' => 'rahmat@example.com',
                'role' => 'radiografer',
                'status' => 'inactive',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                $data
            );
        }
    }
}
