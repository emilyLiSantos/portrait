@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="text-center" style="margin:15px">{{ __('Dashboard') }}</div><br>

                <div class="mb-3 card border-light text-center">

                    <form class="form text-center" method='POST' action="{{ URL('/album/' . $album->id) }}" style="margin: 15px">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="formGroupExampleInput" class="form-label">Nome do album:</label>
                            <input type="text" name="nome" value="{{ $album->titulo }}"  class="form-control" id="formGroupExampleInput" placeholder="">

                            <label for="formGroupExampleInput" class="form-label">Descrição:</label>
                            <input type="text" name="descricao" value="{{ $album->descricao }}" class="form-control" id="formGroupExampleInput" placeholder="">
                         </div>

                        <input class="btn btn-success" type="submit" value="Enviar">

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
