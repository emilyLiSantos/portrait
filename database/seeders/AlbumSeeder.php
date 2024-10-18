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
            'user_id' => 1,
            'titulo' => 'Titulo',
            'descricao' => 'descrição 1'
        ]);

        DB::table('albuns')->insert([
            'user_id' => 1,
            'titulo' => 'Tag',
            'descricao' => 'descrição 2'
        ]);

        DB::table('albuns')->insert([
            'user_id' => 1,
            'titulo' => 'fotos',
            'descricao' => 'descrição 3'
        ]);

    }
}
