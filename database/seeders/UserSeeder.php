<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $user = [
            'name'=>'Jigs',
            'email'=>'juneljigjimenez@gmail.com',
            'password'=> Hash::make('jigs'),
        ];

        User::create([
            'name'=>$user['name'],
            'email'=>$user['email'],
            'password'=>$user['password'],
        ]);

    }
}
