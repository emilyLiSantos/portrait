@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src='{{ url('/richtexteditor/plugins/all_plugins.js') }}'></script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="mb-3 card border-light">


                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif

                    <form method='POST' action="{{ URL('/postagem') }}" style="margin: 15px">
                        @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="form-label">Nome do album:</label>
                                <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="">

                                <label for="formGroupExampleInput" class="form-label">Conteúdo:</label>
                                <input type="text" name="conteudo" class="form-control" id="formGroupExampleInput" placeholder="">

                                <textarea id="inp_editor1" class="form-control" name="conteudo" rows="4" cols="50"></textarea>

                            </div>
                            <input class="btn btn-success text-center" type="submit" value="Enviar">



                    </form>

                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
