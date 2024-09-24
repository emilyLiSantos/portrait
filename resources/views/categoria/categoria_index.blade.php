@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card text-center">

                    <a class="btn btn-success" href="{{ url('/categoria/create') }}" role="button">CRIAR</a>
                        <br>
                        @if (session('mensagem'))
                            <div class="alert alert-success">
                                {{ session('mensagem') }}
                            </div>
                        @endif

                        <script>
                            function ConfirmDelete(){
                                return confirm('Tem certeza que deseja excluir este registro');
                            }
                        </script>

                        <table>
                            <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                            </tr>

                            @foreach($categorias as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nome }}</td>
                                <td>{{ $value->descricao }}</td>
                                <td class="d-flex justify-content-around">
                                    <a class="btn btn-primary" href="{{ url('/categoria/' . $value->id) }}" role="button">Visualizar</a>
                                    <a class="btn btn-warning" href="{{ url('/categoria/' . $value->id . '/edit') }}" role="button">Editar</a>

                                    <form method='POST' action='{{ url('/categoria/' . $value->id) }}' onsubmit= "return ConfirmDelete()">
                                        @method('DELETE')
                                        @csrf
                                            <input type=submit class="btn btn-danger" value='Excluir'>
                                    </form>

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
