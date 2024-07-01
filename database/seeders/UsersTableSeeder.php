<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        User::create([
            'nra' => '0001',
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '081234567890',
            'alamat' => 'Jl. Mawar No. 1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('admin');
        User::create([
            'nra' => '0002',
            'nama' => 'koordinator',
            'email' => 'koordinator@gmail.com',
            'phone' => '081234567890',
            'alamat' => 'Jl. Mawar No. 1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('admin');
        User::create([
            'nra' => '0003',
            'nama' => 'osis',
            'email' => 'osis@gmail.com',
            'phone' => '081234567890',
            'alamat' => 'Jl. Mawar No. 1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('admin');
        User::create([
            'nra' => '0003',
            'nama' => 'pramuka',
            'email' => 'pramuka@gmail.com',
            'phone' => '081234567890',
            'alamat' => 'Jl. Mawar No. 1',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('admin');
    }
}
