@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <a href="{{ url('/album/create') }}" class="btn btn-success"  role="button" aria-disabled="true">Criar</a>
                <table>

                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Descrição</th>
                      <th>Ações</th>
                    </tr>
                  @foreach($albuns as $value)
                    <tr>
                      <td>{{ $value -> id}}</td>
                      <td>{{ $value -> nome}}</td>
                      <td>{{ $value -> descricao}}</td>
                      <td>
                        <a href="{{ url('/album/' .$value->id) }}" class="btn btn-primary"  role="button" aria-disabled="true">Visualizar</a>

                      </td>
                    </tr>
                   @endforeach
                  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


