<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'Name'     => 'Ivan Taufiq',
            'Email'    => 'ivan.taufiq@gmail.com',
            'Password' => bcrypt('password'),
        ]); 
    }
}
