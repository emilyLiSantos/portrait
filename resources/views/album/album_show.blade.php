@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <p><srong>Nome: </strong>{{ $album->nome}}<p>
                <p><srong>Descrição: </strong>{{ $album->descricao}}<p>
                <p><srong>Criação: </strong>{{ $album->created_at }}<p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


