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
        $user = [
            [
                'name' => 'Keysar Jordian',
                'username' => 'keysar123',
                'password' => Hash::make('password')
            ],
        ];

        foreach ($user as $key => $s) {
            User::create([
                'name' => $s['name'],
                'username' => $s['username'],
                'password' => $s['password']
            ])->assignRole('Admin');;
        }
    }
}
