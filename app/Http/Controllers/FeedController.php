<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class FeedController extends Controller
{
    public function geral(){
        $postagens = Postagem::orderBy('id','DESC')->get();
        return view('welcome', compact('postagens'));
    }
}
