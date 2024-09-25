<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('albuns')->insert([
            'nome' => 'Titulo',
            'descricao' => 'descrição 1',
        ]);

        DB::table('albuns')->insert([
            'nome' => 'Tag',
            'descricao' => 'descrição 2'
        ]);

        DB::table('albuns')->insert([
            'nome' => 'fotos',
            'descricao' => 'descrição 3'
        ]);
        DB::table('albuns')->insert([
            'nome' => 'Ana',
            'descricao' => 'descrição 4'
        ]);
    }
}
