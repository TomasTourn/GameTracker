<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $admin = User::firstOrCreate([
            'name'=> 'Admin',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('123123'),
            'avatar'=>'https://i.imgur.com/eZYlKQJ.jpeg',
            'description'=> 'Administrator of The System'
        ]);

        $user1 = User::firstOrCreate([
            'name'=> 'User',
            'email'=> 'user@user.com',
            'password'=> Hash::make('123123'),
            'avatar'=>'https://i.imgur.com/JZ1aPBj.jpeg',
            'description'=> 'User of The System'
        ]);

        $user2 = User::firstOrCreate([
            'name'=> 'User',
            'email'=> 'user2@user.com',
            'password'=> Hash::make('123123'),
            'avatar'=>null,
            'description'=> 'User of The System'
        ]);

        //asigno roles con spatie
        $admin->assignRole('admin');
        $user1->assignRole('user');
        $user2->assignRole('user');
    }
}
