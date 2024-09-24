<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Emily Lima',
            'email'=>'emily@ly.com.br',
            'password'=>Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name'=>'Ana Luiza',
            'email'=>'ana@lu.com.br',
            'password'=>Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name'=>'Lucas Leles',
            'email'=>'lucas@leles.com.br',
            'password'=>Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name'=>'Matheus',
            'email'=>'matheus@us.com.br',
            'password'=>Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name'=>'André Neves',
            'email'=>'andr@andr.com.br',
            'password'=>Hash::make('123456789'),
        ]);
    }
}
