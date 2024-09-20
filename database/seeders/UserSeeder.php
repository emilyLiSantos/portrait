<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'André Neves',
            'email' => 'andr@andr.com.br',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Emily Lima',
            'email' => 'emily@ly.com.br',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ana Luiza',
            'email' => 'ana@ro.com.br',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Matheus ta bom isso ai',
            'email' => 'ma@theus.com.br',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lucas Leles',
            'email' => 'lucas@leles.com.br',
            'password' => Hash::make('123456789'),
        ]);
    }
}
