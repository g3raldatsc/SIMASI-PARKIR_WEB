<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $akun = [
            ['Administrator', 'admin@simasi-parkir.test', User::ROLE_ADMIN],
            ['Petugas Satu', 'petugas1@simasi-parkir.test', User::ROLE_PETUGAS],
            ['Petugas Dua', 'petugas2@simasi-parkir.test', User::ROLE_PETUGAS],
        ];

        foreach ($akun as [$nama, $email, $role]) {
            User::updateOrCreate(
                ['email' => $email],    // kunci pencarian
                [
                    'name' => $nama,
                    'password' => Hash::make('password'),
                    'role' => $role,
                    'is_active' => true,
                ]
            );
        }
    }
}
