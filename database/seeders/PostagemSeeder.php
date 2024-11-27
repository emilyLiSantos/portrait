<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'user_id' => 1,
            'categoria_id' => 1,
            'titulo' => 'Minha primeira POSTAGEM',
            'conteudo' => 'Conteudo da minha primeira POSTAGEM:'
        ]);

        DB::table('postagens')->insert([
            'user_id' => 1,
            'categoria_id' => 1,
            'titulo' => 'Minha segunda POSTAGEM',
            'conteudo' => 'Conteudo da minha segunda POSTAGEM:'
        ]);

        DB::table('postagens')->insert([
            'user_id' => 1,
            'categoria_id' => 1,
            'titulo' => 'Minha terceira POSTAGEM',
            'conteudo' => 'Conteudo da minha terceira POSTAGEM:'
        ]);
    }
}
