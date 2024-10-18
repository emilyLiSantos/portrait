<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Postagem;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderBy('titulo', 'ASC')->get();
        return view('postagem.postagem_index', compact('postagens'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postagem.postagem_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
            'titulo' => 'required|min:5',
            'descricao' => 'required|min:5',
       ]);

       $postagem = new postagem();
       $postagem->titulo = $request->titulo;
       $postagem->descricao = $request->descricao;
       $postagem->save();

       //dd($request->all());

       return redirect()->route('postagem.index')->with('mensagem', 'postagem cadastrada com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd('show' . $id);
        $postagem = postagem::find($id);
        return view('postagem.postagem_show', compact('postagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //dd('edit: ' . $id);
       $postagem = postagem::find($id);
       return view('postagem.postagem_edit', compact('postagem'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome' => 'required|min:5',
       ]);

        $postagem = postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;
        $postagem->save();

        return redirect()->route('postagem.index')->with('mensagem', 'postagem alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = postagem::find($id);
        $postagem->delete();

        return redirect()->route('postagem.index')->with('mensagem', 'postagem excluída com sucesso');
    }
}
