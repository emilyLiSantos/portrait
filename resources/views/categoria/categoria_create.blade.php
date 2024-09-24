@extends('adminlte::page')

@section('content')

<div class="container text-center">
    <div class="row justify-content">
        <div class="col-md-12">
            <div class="">
                <div class="text-center" style="margin:15px">{{ __('Dashboard') }}</div><br>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3 card border-light">

                    <form method='POST' action="{{ URL('/categoria') }}" style="margin: 15px">
                        @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="form-label">Nome da categoria:</label>
                                <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="">

                                <label for="formGroupExampleInput" class="form-label">Descrição:</label>
                                <input type="text" name="descricao" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                            <input class="btn btn-success text-center" type="submit" value="Enviar">

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
