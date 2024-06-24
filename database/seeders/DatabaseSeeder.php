<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Patient Name',
            'email' => 'patient@mail.com',
            'password' => Hash::make('password'),
            'role'=>'pasien',
        ]);

        User::create([
            'name' => 'Doctor Name',
            'email' => 'doctor@mail.com',
            'password' => Hash::make('password'),
            'role'=>'dokter',
        ]);

        User::create([
            'name' => 'Admin Name',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'role'=>'admin',
        ]);
    }
}
