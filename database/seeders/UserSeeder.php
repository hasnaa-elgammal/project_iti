<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'first_name'=> 'Hasnaa',
            'last_name'=> 'El-gammal',
            'email'=> 'hasnaa@gmail.com',
            'address'=> 'baltim',
            'birth_date'=> date('Y-m-d', strtotime('10-1-2002')),
            'password'=> Hash::make('Hasnaa123'),
        ]);
        User::create([
            'first_name'=> 'Sara',
            'last_name'=> 'El-mogy',
            'email'=> 'sara@gmail.com',
            'address'=> 'Kafr El-Sheikh',
            'birth_date'=> date('Y-m-d', strtotime('10-10-2001')),
            'password'=> Hash::make('Sara12345'),
        ]);
        User::create([
            'first_name'=> 'Sabreen',
            'last_name'=> 'Hassan',
            'email'=> 'sabreen@gmail.com',
            'address'=> 'Fowa',
            'birth_date'=> date('Y-m-d', strtotime('13-2-2001')),
            'password'=> Hash::make('Sabreen123'),
        ]);
        User::create([
            'first_name'=> 'Salma',
            'last_name'=> 'Yasser',
            'email'=> 'Salma@gmail.com',
            'address'=> 'Alexandria',
            'birth_date'=> date('Y-m-d', strtotime('19-11-2000')),
            'password'=> Hash::make('Salma123'),
        ]);
        User::create([
            'first_name'=> 'Yara',
            'last_name'=> 'Ali',
            'email'=> 'Yara@gmail.com',
            'address'=> '6th of October',
            'birth_date'=> date('Y-m-d', strtotime('1-1-2001')),
            'password'=> Hash::make('Yara12345'),
        ]);
    }
}
