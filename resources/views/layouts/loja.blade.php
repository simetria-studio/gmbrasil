<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('loja/css/custom.min.css') }}">
    <title>GM BRASIL VD - SHOP</title>
</head>

<body>
    <div class="preloader_container d-none">
        <div id="loader">
            <div class="semi semi1 animated1"></div>
            <div class="semi semi2 animated2"></div>
            <div class="semi semi3 animated3"></div>
            <div class="outerc">
                <div class="innerc"></div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="main-head">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="{{ route('loja') }}"> <img
                                    src="{{ asset('assets/img/logo-dourada-nova.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <div class="input-group mb-3 search">
                                <input type="search" class="form-control" placeholder="Buscar..."
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn-search" type="button" id="button-addon2"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center icons">
                            <div class="user">
                                <a href=""> <i class="far fa-user"></i></a>
                            </div>
                            <div class="divider">

                            </div>
                            <div class="cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopping-cart">
            <div class="cart-header">
                <button class="cart-close"><i class="far fa-times-circle"></i></button>
            </div>
            <div class="cart-body">
                <div class="mini-shopping-cart">


                </div>
                <div class="mini-cart-subtotal text-center my-4">
                    <div>
                        <span>Sub Total:</span>
                    </div>
                    <div>
                        <span class="price-span"></span>
                    </div>
                </div>
                <div class="mini-shopping-cart-buttons text-center mb-5">
                    <a href="{{ route('cart') }}"> <button class="waves-effect waves-orange btn btn-dark">FINALIZAR
                            COMPRA</button></a>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="navbar navbar-expand-md navbar-dark " role="navigation">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('loja') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Produtos </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1">

                                @forelse (getCategories() as $category)
                                    <li class="dropdown-item  dropdown ">
                                        <a class="@if ($category->subCategories->count() > 0) dropdown-toggle @endif"
                                            id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">{{ $category->name }}</a>
                                        @if ($category->subCategories->count() > 0)
                                            <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                                @forelse ($category->subCategories as $subCategory)
                                                    <li class="dropdown-item" href="#">
                                                        <a>{{ $subCategory->name }}</a>
                                                    </li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        @endif
                                    </li>
                                    @empty
                                    @endforelse

                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"
                src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        @yield('script')
        <script src="{{ asset('loja/js/pagseguro.js') }}"></script>
        <script src="{{ asset('loja/js/script.js') }}"></script>
        <script src="{{ asset('loja/js/payment.js') }}"></script>

    </body>

    </html>

