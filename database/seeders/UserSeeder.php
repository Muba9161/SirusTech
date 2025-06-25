<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Sirus',
            'email' => 'sirus@example.com',
            'password' => Hash::make('sirustech'),
        ]);

        User::create([
            'name' => 'Second User',
            'email' => 'second@example.com',
            'password' => Hash::make('sirustech'),
        ]);
    }
}
