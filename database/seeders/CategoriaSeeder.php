<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome'=> 'Natureza',
            'descricao'=>'descricao 1',
        ]);

        DB::table('categorias')->insert([
            'nome'=> 'Comida',
            'descricao'=>'descricao 2',
        ]);

        DB::table('categorias')->insert([
            'nome'=> 'Filmes',
            'descricao'=>'descricao 3',
        ]);
    }
}
