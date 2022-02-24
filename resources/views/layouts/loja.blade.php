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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('loja/css/custom.min.css') }}">
    <title>GM BRASIL VD - SHOP</title>
</head>

<body>
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
                            <div class="cart">
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
                    @foreach (\Cart::getContent() as $item)
                        <div class="mini-cart-item" id="cart-itens-{{ $item->id }}">
                            <div>
                                <img src="{{ asset('storage/' . $item->attributes->image) }}">
                            </div>
                            <div>
                                <span>{{ $item->name }}<br></span>
                                <span>Código: 103530<br>Quantidade: {{ $item->quantity }}</span>
                            </div>
                            <div>
                                <span>R$
                                    {{ number_format($item->price, 2, ',', '.') }}<br></span>
                                <i class="fa fa-trash-o remove-{{ $item->id }}" id="removeItem"  data-remove="{{ $item->id }}" ></i>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="mini-cart-subtotal text-center my-4">
                    <div>
                        <span>Sub Total:</span>
                    </div>
                    <div>
                        <span class="price-span"></span>
                    </div>
                </div>
                <div class="mini-shopping-cart-buttons text-center">
                    <button class="waves-effect waves-orange btn btn-dark">FINALIZAR COMPRA</button>
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
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        <script src="{{ asset('loja/js/script.js') }}"></script>
    </body>

    </html>
