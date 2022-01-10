<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>GM BRASIL VD</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ url('painel/images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/bootstrap.min.css ') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/typography.css')}} ">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/style.css ')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/responsive.css')}}">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container bg-white mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 align-self-center">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Entrar</h1>
                            <p>Entrar no painel admistrativo da GM BRASIL VD</p>
                            <form id="form-login" class="mt-4" method="post" action="{{ route('admin.login.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="email" class="form-control mb-0" name="name" id="exampleInputEmail1" placeholder="Coloque o email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control mb-0" name="email" id="exampleInputEmail1" placeholder="Coloque o email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>

                                    <input type="password" class="form-control mb-0" name="password" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">

                                    <button id="btn-login" type="submit" class="btn btn-primary float-right">Entrar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="{{ url('painel/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Gerencie tudo</h4>

                                </div>
                                <div class="item">
                                    <img src="{{ url('painel/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Painel moderno</h4>

                                </div>
                                <div class="item">
                                    <img src="{{ url('painel/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Controle total</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ url('painel/js/jquery.min.js')}}"></script>
      <script src="{{ url('painel/js/popper.min.js')}}"></script>
      <script src="{{ url('painel/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ url('painel/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ url('painel/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ url('painel/js/waypoints.min.js')}}"></script>
      <script src="{{ url('painel/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ url('painel/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ url('painel/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ url('painel/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ url('painel/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ url('painel/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ url('painel/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ url('painel/js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ url('painel/js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{ url('painel/js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ url('painel/js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ url('painel/js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ url('painel/js/kelly.js')}}"></script>
      <!-- Flatpicker Js -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ url('painel/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="{{ url('painel/js/custom.js')}}"></script>
      <script src="{{ url('painel/js/login.js')}}"></script>

   </body>
</html>
