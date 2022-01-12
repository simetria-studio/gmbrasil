    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}"> --}}
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('assets/css/painel.min.css') }}">
        <script src="https://kit.fontawesome.com/e67788a73f.js" crossorigin="anonymous"></script>
        <title>GM Brasil VD</title>
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
                        <a class="menu-link is-active" href="#">Home</a>
                        <a class="menu-link notify" href="#">Carteira</a>
                        <a class="menu-link" href="#">Loja</a>
                        <a class="menu-link notify" href="#">Suporte</a>
                    </div>
                    <div class="search-bar">
                        <input type="text" placeholder="Buscar...">
                    </div>
                    <div class="header-profile">
                        <div class="notification">
                            <span class="notification-number">0</span>
                            <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
                            </svg>
                        </div>
                        <svg viewBox="0 0 512 512" fill="currentColor">
                            <path
                                d="M448.773 235.551A135.893 135.893 0 00451 211c0-74.443-60.557-135-135-135-47.52 0-91.567 25.313-115.766 65.537-32.666-10.59-66.182-6.049-93.794 12.979-27.612 19.013-44.092 49.116-45.425 82.031C24.716 253.788 0 290.497 0 331c0 7.031 1.703 13.887 3.006 20.537l.015.015C12.719 400.492 56.034 436 106 436h300c57.891 0 106-47.109 106-105 0-40.942-25.053-77.798-63.227-95.449z" />
                        </svg>
                        <img id="img-hover" class="profile-img"
                            src="https://ui-avatars.com/api/?size=512&amp;background=5B4699&amp;color=fff&amp;name={{ auth()->user()->name }}"
                            alt="">
                        <div class="drop-menu d-none" id="drop-menu">
                            <nav class="nav flex-column">
                                <a class="nav-link active" href="#">Perfil</a>
                                <a class="nav-link" href="{{ route('painel.logout') }}">Sair</a>
                            </nav>
                        </div>
                    </div>
                </div>

            </header>
            <div class="wrapper">
                <aside>
                    <div class="left-side">
                        <div class="side-wrapper">
                            <div class="side-title">Principal</div>
                            <div class="side-menu">
                                <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                            </div>
                        </div>
                        <div class="side-wrapper">
                            <div class="side-title">Categorias</div>
                            <div class="side-menu">
                                <a href="{{ route('pedidos') }}"><i class="fas fa-clipboard-list"></i></i> Pedidos</a>
                                <a href="{{ route('estoque') }}"><i class="fas fa-boxes"></i> Seus produtos</a>
                                <a href="{{ route('afiliados') }}"><i class="fas fa-users"></i> Afiliados</a>
                                <a href="{{ route('lucros') }}"><i class="fas fa-hand-holding-usd"></i> Seus
                                    lucros</a>
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
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
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
