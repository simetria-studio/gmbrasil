<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e67788a73f.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('dark-html/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loja/style.min.css') }}">

    <title>GM VD Brasil</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ url('assets/img/logo.png') }} " width="40" height="40" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-md-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Carrinho</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="mb-5 mt-4">
        @yield('content')
    </main>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="mb-0">
                        <li class="list-inline-item">
                            <a href="">Politicas de privacidade</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="">Termos de uso</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright {{ date('Y') }}
                    <a target="_blank" href="http://cubeti.dev.br/">Cube TI</a>
                    Todos direitos Reservados
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('dark-html/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/popper.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('dark-html/js/countdown.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/wow.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/apexcharts.js') }}"></script>
    <script src="{{ asset('dark-html/js/slick.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/select2.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('dark-html/js/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('dark-html/js/lottie.js') }}"></script>
    <script src="{{ asset('dark-html/js/chart-custom.js') }}"></script>
    <script src="{{ asset('dark-html/js/custom.js') }}"></script>
</body>

</html>
