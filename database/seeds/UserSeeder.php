<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hamidou Bayo',
            'email' => 'hbdesign@hbdesign.com',
            'email_verified_at' => now(),
            'password' => Hash::make('HB778090148@'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
