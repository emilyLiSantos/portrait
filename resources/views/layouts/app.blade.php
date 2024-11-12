<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Verti by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{  url('assets/css/main.css')  }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
			<header>
                <nav class="navbar navbar-expand-lg" style="background-color:black; padding-top: 20px; padding-bottom: 20px;">
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
                </nav>
			</header>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="">

							<div class="">

								<div class="container">
                                    @yield('content')
                                </div>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
                            <div class="col-12 ">
								<!-- Contact -->
									<section class="widget contact last">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
									</section>
                            </div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

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
