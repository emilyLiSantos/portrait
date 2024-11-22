<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Portrait</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{  url('assets/css/main.css')  }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
            /* testando segunda pagina*/
            .page {
                background-image: url(https://media.istockphoto.com/id/1853173882/pt/foto/large-scarlet-macaw-couple-flying-inside-buraco-das-araras-in-the-city-of-jardim-in-the.jpg?s=2048x2048&w=is&k=20&c=asdQEK5t8lBvemBV2oslDJiE-Sn9MelGBSKs7gRmx2c=);
                background-size: cover;
                background-position: center;
                position: relative;
                height: 85vh;
            }


            .custom-section {
                background-color: #eaf9f027;
                padding: 50px 0;
            }
            .custom-btn {
                background-color: #8f0015;
                border: none;
            }
            /*.custom-btn:hover {
                background-color: #ff0a2a;
            }*/
        </style>

<style>
    /* Pagina 3*/
    .background-imagen {
        background-image: url('https://cdn.pixabay.com/photo/2023/08/23/15/44/ai-generated-8208847_1280.png');
        background-size: cover;
        background-position: center;
        position: relative;
        height: 100vh;
    }

    /* texto de fundo da pagina  */
    .background-imagen .text-content {
        position: absolute;
        top: 30%;
        left: 5%;
        color: white;
        z-index: 2;
    }

    .background-imagen .text-content h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    /* Forms */
    .form-container {
        position: absolute;
        top: 20%;
        right: 5%;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        z-index: 3;
        max-width: 400px;
    }
</style>

    </head>
	<body class="is-preload homepage">
		<div id="page-wrapper">




               <!-- <nav class="navbar navbar-expand-lg" style="background-color:black; padding-top: 30px;">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">
                        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR7qvJYXxJFO5Y8j-O5XBPLaLjdaqx_Fe1SNfSwnYzI-N6ouVS9" alt="logo" width="65" height="60">
                      </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" style="color:rgb(255, 255, 255)" aria-current="page" href="#">Sobre</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color:rgb(255, 255, 255)" href="#">Explorar</a>
                          </li>
                        </ul>
                      </div>

                    <div class="">
                    <button type="button" class="btn" style="background-color:#FF0000; color:aliceblue">Entrar</button>
                    <button type="button" class="btn" style="background-color:#FF0000; color:aliceblue">Crie Sua Conta</button>
                    </div>

                    </div>
                </nav>-->

         <!--Nabar-->
                <nav class="navbar navbar-expand-lg border-bottom" style="background-color:black; padding-top: 30px;">
                    <div class="container-fluid" >
                        <a class="navbar-brand" href="#">
                            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR7qvJYXxJFO5Y8j-O5XBPLaLjdaqx_Fe1SNfSwnYzI-N6ouVS9" width="45px" alt="">
                            <span style="color:#eaf9f0;">Portrait</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link" href="#" style="color:#fff">Sobre</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color:#fff">Explorar</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{  url('/feed/categoria')}}" style="color:#fff">Categorias</a></li>
                                <li class="nav-item"><a class="btn btn-danger ms-2" href="#" style="color:#fff">Entrar</a></li>
                                <li class="nav-item"><a class="btn btn-danger ms-2" href="#" style="color:#fff">Criar Conta</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
              <!--fim navbar-->

			<!-- Main/welcome-->
				<div id="main-wrapper" style="margin-top: 0%">
					<div class="">
						<div class="">
							<div class="">

								<div class="container">
                                    @yield('content')
                                </div>

							</div>
						</div>
					</div>
				</div>
             <!--fim Main-->

             <!-- Footer -->
            <footer class="rodape mt-5 mb-3" style="background-color:black; padding-top: 30px;">
                <div class="container text-center">
                    <div class="row p-5">
                        <div class="col-md-3 mt-3">
                            <a class="navbar-brand" href="#">
                              <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR7qvJYXxJFO5Y8j-O5XBPLaLjdaqx_Fe1SNfSwnYzI-N6ouVS9" alt="" width="150" height="140">
                            </a>
                        </div>

                        <div class="col-md-3 mt-3">
                            <h3 class="fs-6 ms-3" style="color:rgb(255, 255, 255)">INFORMAÇÕES</h3>
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                <a class="nav-link fw-lighter text-white" aria-current="page" href="index.html">Início</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link fw-lighter text-white" aria-current="page" href="vinil.html">Explorar</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link fw-lighter text-white" aria-current="page" href="cd.html">Sobre Nós</a>
                              </li>
                            </ul>
                        </div>

                        <div class="col-md-3 mt-3">

                                <button type="button" class="btn" style="background-color:#FF0000; color:aliceblue">Crie Sua Conta</button>
                        </div>
                    </div>

            </footer>
     <!--fim Footer-->
		</div>

		<!-- Scripts -->

			<script src="{{  url('assets/js/jquery.min.js')  }}"></script>
			<script src="{{  url('assets/js/jquery.dropotron.min.js')  }}"></script>
			<script src="{{  url('assets/js/browser.min.js')  }}"></script>
			<script src="{{  url('assets/js/breakpoints.min.js')  }}"></script>
			<script src="{{  url('assets/js/util.js')  }}"></script>
			<script src="{{  url('assets/js/main.js')  }}"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>

</html>
