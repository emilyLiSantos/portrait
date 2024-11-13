@extends('layouts.app')

@section('content')

<section class="carrossel1">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75" class="d-block w-100" alt="..." height="664" width="1429">
          </div>
          <div class="carousel-item">
            <img src="https://designcomcafe.com.br/wp-content/uploads/2023/10/como-criar-prompts-para-geracao-de-imagens-com-ia-1024x538.jpg" class="d-block w-100" alt="..." height="664" width="1429">
          </div>
          <div class="carousel-item">
            <img src="https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75" class="d-block w-100" alt="..." height="664" width="1429">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>

<!-- Features -->
    <div id="features-wrapper"  style="background-color:rgba(52, 54, 156, 0.548); border-radius: 25px;" >
        <div class="container">
            <div class="row">
                <div class="col-4 col-12-medium">

                    <!-- Box -->
                        <section class="">
                            <a href="#" class="image featured"><img src="" alt="" /></a>
                            <div class="inner">
                                <header>
                                    <h2 style="font-size: 28px;">Put something here</h2>
                                    <p>Maybe here as well I think</p>
                                </header>

                            </div>
                        </section>

                </div>
                <div class="col-4 col-12-medium">

                    <!-- Box
                        <section class="box feature">
                            <a href="#" class="image featured"><img src="https://services.meteored.com/img/article/inteligencia-artificial-aprende-a-reconstruir-imagens-vistas-por-pessoas-ciencia-fotos-1679175318563_1280.jpg" alt="" /></a>
                            <div class="inner">
                                <header>
                                    <h2>An interesting title</h2>
                                    <p>This is also an interesting subtitle</p>
                                </header>
                                <p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
                            </div>
                        </section>-->

                </div>
                <div class="col-4 col-12-medium">

                    <!-- Formulario-->
                        <section class="">
                            <form>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </section>

                </div>
            </div>
        </div>
    </div>

    <!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row gtr-200">
                <div class="col-4 col-12-medium">

                    <!-- Sidebar -->
                        <div id="sidebar">
                            <section class="widget thumbnails">
                                <h3>Interesting stuff</h3>
                                <div class="grid">
                                    <div class="row gtr-50">
                                        <div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
                                        <div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
                                        <div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
                                        <div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
                                    </div>
                                </div>
                                <a href="#" class="button icon fa-file-alt">More</a>
                            </section>
                        </div>

                </div>
                <div class="col-8 col-12-medium imp-medium">

                    <!-- Content -->
                        <div id="content">
                            <section class="last">
                                <h2>So what's this all about?</h2>
                                <p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href="http://html5up.net">HTML5 UP</a>.
                                Verti is released under the <a href="http://html5up.net/license">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
                                <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
                                <a href="#" class="button icon solid fa-arrow-circle-right">Continue Reading</a>
                            </section>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>/*
@endsection
