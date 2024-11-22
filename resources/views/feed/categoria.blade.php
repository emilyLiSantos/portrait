@extends('layouts.app')



@section('content')

@foreach ($categorias as $value)

<p><strong>{{ $value->name }}</strong> </p>

@endforeach




@endsection

