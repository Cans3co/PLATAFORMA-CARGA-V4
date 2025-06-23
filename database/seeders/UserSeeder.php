<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Usuario Admin original
        User::create([
            'name' => 'Usuario Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Nuevo usuario jamendoza20
        User::create([
            'name' => 'jamendoza20', // Puedes cambiar este nombre si lo deseas
            'email' => 'jamendoza20@carbol.com',
            'password' => Hash::make('user'),
        ]);
    }
}