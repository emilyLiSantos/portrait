@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src='{{ url('/richtexteditor/plugins/all_plugins.js') }}'></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="text-center" style="margin:15px">{{ __('Dashboard') }}</div><br>

                <div class="mb-3 card border-light text-center">

                    <form class="form text-center" method='POST' action="{{ URL('/postagem/' . $postagem->id) }}" style="margin: 15px">

                        @method('PUT')
                        @csrf


                        <div class="form-group">
                            <label for="formGroupExampleInput" class="form-label">Título da Postagem:</label>
                            <input type="text" name="nome" value="{{ $postagem->titulo }}"  class="form-control" id="formGroupExampleInput" placeholder="">

                            <label for="categorias">Escolha uma categoria:</label><br>

                            <select name="categoria_id">

                                @foreach ($categorias as $value)
                                    <option value="{{ $value->id }}">{{ $value->nome }}</option>
                                @endforeach

                            </select><br><br>

                            <label for="formGroupExampleInput" class="form-label">Conteúdo:</label>
                            <textarea id="inp_editor1" class="form-control" name="conteudo" rows="4" cols="50">{{ $postagem->conteudo }}</textarea>
                         </div>

                        <input class="btn btn-success" type="submit" value="Enviar">

                    </form>

                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
