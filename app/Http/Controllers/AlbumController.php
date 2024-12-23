<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albuns = Album::orderBy('titulo', 'ASC')->get();
        //dd($albuns);
        return view('album.album_index', compact('albuns'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('album.album_create');
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

         $album = new album();
         $album->titulo = $request->titulo;
         $album->descricao = $request->descricao;
         $album->user_id = Auth::id();
         $album->save();

        //dd($request->all());

        return redirect()->route('album.index')->with('mensagem', 'Album cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //dd('show: ' . $id);
       $album = Album::find($id);
       return view('album.album_show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::find($id);
        return view('album.album_edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'descricao' => 'required|min:5',
        ]);

         $album = new album();
         $album->titulo = $request->titulo;
         $album->descricao = $request->descricao;
         $album->user_id = Auth::id();
         $album->save();

        //dd($request->all());

        return redirect()->route('album.index')->with('mensagem', 'Album alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::find($id);
        $album->delete();

        return redirect()->route('album.index')->with('mensagem', 'Album excluído com sucesso');
    }
}
