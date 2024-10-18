@extends('adminlte::page')

@section('content')
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
                            </div>
                            <input class="btn btn-success text-center" type="submit" value="Enviar">

                    </form>

                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
