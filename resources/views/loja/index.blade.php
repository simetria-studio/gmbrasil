@extends('layouts.loja')

@section('content')
    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider" style="background-image: url('assets/img/gmbrasil.jpg'); 	height: auto;
                                                    background-size: cover;
                                                    background-position: center;
                                                    background-repeat: no-repeat;
                                                    height: 510px;">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->

    <!-- Start Small Banner  -->

    <!-- End Small Banner -->

    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">

                        </div>
                        <div>
                            <h1 class="text-center my-4 text-uppercase">Mais Vendidos</h1>
                            <div class="container  responsive">
                                @foreach ($products as $product)
                                    <div class="product-item"><img
                                            src="{{ asset('storage/' . $product->productImage[0]->image_name) }}">
                                        <div class="product-list">
                                            <h3>{{ $product->name }}</h3><span class="price">R$
                                                {{ number_format($product->value, 2, ',', '.') }}</span><button data-id="{{ $product->id }}" data-cart="{{ json_encode($product) }}"
                                                class="btn btn-dark btn-cart btn-{{ $product->id }}">ADICIONAR</button>
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Midium Banner  -->

    <!-- End Midium Banner -->

    <!-- Start Most Popular -->

@endsection
