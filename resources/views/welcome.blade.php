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
                    <li><a href="{{ url('/feed/postagem/' . $value->id . '/comentario')}}" class="icon solid fa-comment">{{ $value->comentarios->count() }}</a></li>
                    </ul>
                    </footer>


                @endforeach

            </div>
        </div>

    </section>


   <!--Features-->
  <div id="features-wrapper "  style="background-color:rgba(52, 54, 156, 0.548); border-radius: 25px;">

                </div>
            </div>
        </div>
    </div>
     <!--Pagina 1 -->
    <div class="page">
        <div class="container">
            <div class="row align-items-center ">
                <!-- Imagem
                <div class="col-md-6 text-center">
                    <img src=""  class="img-fluid rounded" alt="Imagem">
                </div>-->
                <!-- Coluna do texto -->
                <div class=" justify-content-center align-items-center text-center" style="text-align: center;">
                    <h1 class="display-4 fw-bold text-white">Bem vindo ao Portrait</h1>
                    <p class="fs-5 text-white">
                        A melhor parte do Portrait.
                    </p>

                </div>
            </div>
        </div>
    </div>



    <!--pagina 2-->


    <div class="custom-section">


        <div class="container">
            <div class="row align-items-center">
                <!-- Imagem -->
                <div class="col-md-6 text-center">
                    <img src=""  class="img-fluid rounded" alt="Imagem">
                </div>
                <!-- Coluna do texto -->
                <div class="col-md-6">
                    <h1 class="fw-bold text-danger">Use o explorar </h1>
                    <p class="fs-5 text-muted">
                        A melhor parte do Portrait.
                    </p>
                   <a class="nav-item"><a class="btn btn-danger ms-2" href="#" style="color:#fff">Explorar</a>

                </div>
            </div>
        </div>

    </div>


<!--Pagina 3 com forms, OBs:nao sei como coloca o login direto com o google-->
    <div class="background-imagen">
        <!-- Texto sobre -->
        <div class="text-content">
            <h1><br></h1>
        </div>

        <!-- Formulário -->
        <div class="form-container">
            <h2 class="text-center">Bem-vindo(a) ao Portrait</h2>
            <p class="text-center">Crie sua conta</p>

            <!--forms-->
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Crie uma senha">
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" id="dob">
                </div>
                <button type="submit" class="btn btn-danger w-100">Continuar</button>
                <div class="text-center mt-3">
                    <p>ou</p>
                    <button type="button" class="btn btn-outline-secondary w-100">Continuar com o Google</button>
                </div>
                <p class="mt-3 text-center text-muted" style="font-size: 0.9rem;">
                    Ao continuar, você concorda com os Termos de Serviço e confirma que leu nossa Política de Privacidade.
                </p>
            </form>
        </div>
    </div>
</div>


@endsection


