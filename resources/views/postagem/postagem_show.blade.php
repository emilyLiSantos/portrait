
@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin:15px">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p><strong>Título:</strong> {{ $postagem->titulo }}</p>
                    <p><strong>Categoria:</strong> {{ $postagem->categoria->nome }}</p>
                    <p><strong>Conteúdo:</strong> {!! $postagem->conteudo !!}</p>
                    <p><strong>Autor:</strong> {{ $postagem->autor->name }}</p>
                    <p><strong>Criação:</strong> {{ $postagem->created_at }}</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
