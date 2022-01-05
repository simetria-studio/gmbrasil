    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}"> --}}
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('assets/css/painel.min.css') }}">
        <title>GM Brasil</title>
    </head>

    <body>
        <div class="video-bg">
            <video width="320" height="240" autoplay loop muted>
                <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="dark-light">
            <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
            </svg>
        </div>
        <div class="app">
            <header>
                <div class="header">
                    <div class="menu-circle"></div>
                    <div class="header-menu">
                        <a class="menu-link is-active" href="#">Apps</a>
                        <a class="menu-link notify" href="#">Your work</a>
                        <a class="menu-link" href="#">Discover</a>
                        <a class="menu-link notify" href="#">Market</a>
                    </div>
                    <div class="search-bar">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="header-profile">
                        <div class="notification">
                            <span class="notification-number">3</span>
                            <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
                            </svg>
                        </div>
                        <svg viewBox="0 0 512 512" fill="currentColor">
                            <path
                                d="M448.773 235.551A135.893 135.893 0 00451 211c0-74.443-60.557-135-135-135-47.52 0-91.567 25.313-115.766 65.537-32.666-10.59-66.182-6.049-93.794 12.979-27.612 19.013-44.092 49.116-45.425 82.031C24.716 253.788 0 290.497 0 331c0 7.031 1.703 13.887 3.006 20.537l.015.015C12.719 400.492 56.034 436 106 436h300c57.891 0 106-47.109 106-105 0-40.942-25.053-77.798-63.227-95.449z" />
                        </svg>
                        <img class="profile-img"
                            src="https://images.unsplash.com/photo-1600353068440-6361ef3a86e8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                            alt="">
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <aside>
                    <div class="left-side">
                        <div class="side-wrapper">
                            <div class="side-title">Principal</div>
                            <div class="side-menu">
                                <a href="#">
                                    {{-- <svg viewBox="0 0 512 512">
                                        <g xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path
                                                d="M0 0h128v128H0zm0 0M192 0h128v128H192zm0 0M384 0h128v128H384zm0 0M0 192h128v128H0zm0 0"
                                                data-original="#bfc9d1" />
                                        </g>
                                        <path xmlns="http://www.w3.org/2000/svg" d="M192 192h128v128H192zm0 0"
                                            fill="currentColor" data-original="#82b1ff" />
                                        <path xmlns="http://www.w3.org/2000/svg"
                                            d="M384 192h128v128H384zm0 0M0 384h128v128H0zm0 0M192 384h128v128H192zm0 0M384 384h128v128H384zm0 0"
                                            fill="currentColor" data-original="#bfc9d1" />
                                    </svg> --}}
                                    Home
                                </a>
                            </div>
                        </div>
                        <div class="side-wrapper">
                            <div class="side-title">Categorias</div>
                            <div class="side-menu">
                                <a href="#">
                                    {{-- <svg viewBox="0 0 488.455 488.455" fill="currentColor">
                                        <path
                                            d="M287.396 216.317c23.845 23.845 23.845 62.505 0 86.35s-62.505 23.845-86.35 0-23.845-62.505 0-86.35 62.505-23.845 86.35 0" />
                                        <path
                                            d="M427.397 91.581H385.21l-30.544-61.059H133.76l-30.515 61.089-42.127.075C27.533 91.746.193 119.115.164 152.715L0 396.86c0 33.675 27.384 61.074 61.059 61.074h366.338c33.675 0 61.059-27.384 61.059-61.059V152.639c-.001-33.674-27.385-61.058-61.059-61.058zM244.22 381.61c-67.335 0-122.118-54.783-122.118-122.118s54.783-122.118 122.118-122.118 122.118 54.783 122.118 122.118S311.555 381.61 244.22 381.61z" />
                                    </svg> --}}
                                    Pedidos
                                </a>
                                <a href="#">
                                    {{-- <svg viewBox="0 0 512 512" fill="currentColor">
                                        <circle cx="295.099" cy="327.254" r="110.96"
                                            transform="rotate(-45 295.062 327.332)" />
                                        <path
                                            d="M471.854 338.281V163.146H296.72v41.169a123.1 123.1 0 01121.339 122.939c0 3.717-.176 7.393-.5 11.027zM172.14 327.254a123.16 123.16 0 01100.59-120.915L195.082 73.786 40.146 338.281H172.64c-.325-3.634-.5-7.31-.5-11.027z" />
                                    </svg> --}}
                                    Seus produtos
                                </a>
                                <a href="#">
                                    {{-- <svg viewBox="0 0 512 512" fill="currentColor">
                                        <circle cx="295.099" cy="327.254" r="110.96"
                                            transform="rotate(-45 295.062 327.332)" />
                                        <path
                                            d="M471.854 338.281V163.146H296.72v41.169a123.1 123.1 0 01121.339 122.939c0 3.717-.176 7.393-.5 11.027zM172.14 327.254a123.16 123.16 0 01100.59-120.915L195.082 73.786 40.146 338.281H172.64c-.325-3.634-.5-7.31-.5-11.027z" />
                                    </svg> --}}
                                    Indicados
                                </a>
                                <a href="#">
                                    {{-- <svg viewBox="0 0 58 58" fill="currentColor">
                                        <path
                                            d="M57 6H1a1 1 0 00-1 1v44a1 1 0 001 1h56a1 1 0 001-1V7a1 1 0 00-1-1zM10 50H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2V8h8v9zm26.537 12.844l-11 7a1.007 1.007 0 01-1.018.033A1.001 1.001 0 0124 36V22a1.001 1.001 0 011.538-.844l11 7a1.003 1.003 0 01-.001 1.688zM56 50h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8V8h8v9z" />
                                    </svg> --}}
                                    Seus lucros
                                </a>
                            </div>
                        </div>
                </aside>

                <div class="main-container">
                    @yield('content')
                </div>
            </div>
            <div class="overlay-app"></div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
                integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
        <script src="{{ url('assets/js/script.js') }}"></script>
        <script src="{{ url('assets/js/painel.js') }}"></script>
        <script>
            $('#buscaring').on('click', function() {
                $value = $('#ceping').val();
                $.ajax({
                    type: 'get',
                    url: '{{ route('address.cep') }}',
                    data: {
                        'search': $value
                    },
                    success: function(data) {
                        console.log(data);
                        $('#endereco').val(data.street);
                        $('#bairro').val(data.district);
                        $('#cidade').val(data.city);
                        $('#estado').val(data.uf);
                    }
                });
            })
        </script>
        @yield('script')
    </body>

    </html>
