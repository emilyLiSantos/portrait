@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="text-center" style="margin:15px">{{ __('Dashboard') }}</div><br>

                <div class="mb-3 card border-light text-center">

                    <form class="form text-center" method='POST' action="{{ URL('/postagem/' . $postagem->id) }}" style="margin: 15px">

                        @method('PUT')
                        @csrf


                        <div class="form-group">
                            <label for="formGroupExampleInput" class="form-label">Título da Postagem:</label>
                            <input type="text" name="nome" value="{{ $postagem->titulo }}"  class="form-control" id="formGroupExampleInput" placeholder="">


                            <label for="formGroupExampleInput" class="form-label">Conteúdo:</label>
                            <input type="text" name="conteudo" value="{{ $postagem->conteudo }}" class="form-control" id="formGroupExampleInput" placeholder="">
                         </div>

                        <input class="btn btn-success" type="submit" value="Enviar">

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
