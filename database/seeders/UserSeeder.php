<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin',
            'password'  => Hash::make('123456789')
        ]);

        User::create([
            'name'      => 'user',
            'email'     => 'user@user',
            'password'  => Hash::make('123456789')
        ]);
    }
}
