<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'logistics admin',
            'email' => 'log_admin@example.com',
            'email_verified_at' => now(),
            'is_employee' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user -> assignRole('logistics-admin');
        $user = User::factory()->create([
            'name' => 'logistics manager',
            'email' => 'log_manager@example.com',
            'email_verified_at' => now(),
            'is_employee' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user -> assignRole('logistics-manager');
        $user = User::factory()->create([
            'name' => 'logistics staff',
            'email' => 'log_staff@example.com',
            'email_verified_at' => now(),
            'is_employee' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user -> assignRole('logistics-staff');
        $user = User::factory()->create([
            'name' => 'project manager',
            'email' => 'project_manager@example.com',
            'email_verified_at' => now(),
            'is_employee' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user -> assignRole('project-manager');
        $user = User::factory()->create([
            'name' => 'project staff',
            'email' => 'project_staff@example.com',
            'email_verified_at' => now(),
            'is_employee' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user -> assignRole('project-staff');

    }
}
