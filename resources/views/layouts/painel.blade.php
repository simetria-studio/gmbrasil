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
      <!-- Full calendar -->
      <link href='{{ url('painel/fullcalendar/core/main.css')}}' rel='stylesheet' />
      <link href='{{ url('painel/fullcalendar/daygrid/main.css')}}' rel='stylesheet' />
      <link href='{{ url('painel/fullcalendar/timegrid/main.css')}}' rel='stylesheet' />
      <link href='{{ url('painel/fullcalendar/list/main.css')}}' rel='stylesheet' />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
   </head>
   <body class="top-tab-horizontal">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="top-menu">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="iq-navbar-custom-menu d-flex align-items-center justify-content-between">
                           <div class="iq-sidebar-logo">
                              <div class="top-logo">
                                 <a href="{{ route('admin.index') }}" class="logo">
                                 <img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="">
                                 <span>GM BRASIL VD</span>
                                 </a>
                              </div>
                           </div>
                           <nav class="navbar navbar-expand-lg navbar-light p-0">
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="ri-menu-3-line"></i>
                              </button>
                              <div class="iq-menu-bt align-self-center">
                                 <div class="wrapper-menu">
                                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                                 </div>
                              </div>

                              <ul class="navbar-list">
                                 <li>
                                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                       <img src="https://ui-avatars.com/api/?size=512&amp;background=5B4699&amp;color=fff&amp;name={{ auth()->user()->name }}" class="img-fluid rounded mr-3" alt="user">
                                       <div class="caption">
                                          <h6 class="mb-0 line-height">{{ auth()->user()->name }}</h6>
                                          <span class="font-size-12">Disponivel</span>
                                       </div>
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                       <div class="iq-card shadow-none m-0">
                                          <div class="iq-card-body p-0 ">
                                             <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white line-height">Olá, {{ auth()->user()->name }}</h5>
                                                <span class="text-white font-size-12">Admin</span>
                                             </div>

                                             <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sair<i class="ri-login-box-line ml-2"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-menu-horizontal">
               <div class="container">
                  <div class="row">
                     <div class="iq-menu-horizontal-tab">
                        <nav class="iq-sidebar-menu">
                           <ul id="iq-sidebar-toggle" class="iq-menu d-flex justify-content-left">
                              <li>
                                 <a href="{{ route('admin.index') }}" class="iq-waves-effect collapsed"   aria-expanded="false"><i class="ri-home-4-line"></i><span>Home</span></a>
                              </li>
                              <li class="active">
                                 <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="ri-menu-3-line"></i><span>Gerenciamento de Usuários</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                 <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                    <li><a href="{{ route('admin.users') }}"><i class="ri-git-commit-line"></i>Usuários</a></li>

                                 </ul>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container">
                @yield('content')
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">

               </div>
               <div class="col-lg-6 text-right">
                  Copyright @ <a href="#">Cube</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
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
      <script src="{{ url('painel/js/custom.js')}}"></script>
   </body>
</html>
