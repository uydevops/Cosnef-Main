<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
 
    public function run(): void
    {
        User::factory()->create([
            'name' => 'developer',
            'username' => 'developer',
            'email' => 'info@altf4yazilim.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'status' => 'active',
            'phone' => '5078928490',
            'address' => 'Pinar Mahallesi 74144 Sokak No: 3/1',
            'city' => 'Adana',
            'country' => 'Turkey',
            'postal_code' => '01120',
            'image' => 'https://via.placeholder.com/150',
        ]);
            
    }
}
