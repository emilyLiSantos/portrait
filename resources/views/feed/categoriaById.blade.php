@extends('layouts.app')

@section('content')
    <section>

        <div class="container">
            <div class="row row-cols-4">
                @foreach ($postagens as $value)
                <div class="col">
                    <h3>{{ $value->autor->name }}</h3>
                    <div class="postagem">
                        <img src="data:image/png;base64, {{ $value->imagem }} " class="card-img-top"  width="250" height="250" alt="imagem"/>
                    </div>
                    <div>
                        <h5>{{ $value->titulo }}</h5>
                        <p class="card-text">{!! $value->autor->name !!}</p>
                        <time class="published">{{ $value->created_at }}</time>
                    </div>
                </div>

                <footer>
                    <ul class="stats">
                    <li><a href="{{ url('/feed/categoria/' . $value->id) }}">{{ $value->categoria->nome }}</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                    </ul>
                    </footer>


                @endforeach

            </div>
        </div>

    </section>



@endsection
