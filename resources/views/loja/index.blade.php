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
                    <div class="section-title">
                        <h2>Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
								</ul> --}}
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            @php
                                                // Pegamos somente a primeira imagem a ser a principal
                                                $image = Storage::get($product->productImage[0]->image_name);
                                                $mime_type = Storage::mimeType($product->productImage[0]->image_name);
                                                $image = 'data:' . $mime_type . ';base64,' . base64_encode($image);
                                            @endphp
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="product-details.html">
                                                            <img class="default-img" src="{{ $image }}" alt="#">
                                                            <img class="hover-img" src="{{ $image }}" alt="#">
                                                        </a>
                                                        <div class="button-head">

                                                            <div class="product-action-2">
                                                                <a title="Add to cart" href="#">Adicionar ao Carrinho</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                                        <div class="product-price">
                                                            <span>R$
                                                                {{ number_format($product->value, 2, ',', '.') }}</span>
                                                        </div>
                                                    </div>
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
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Midium Banner  -->

    <!-- End Midium Banner -->

    <!-- Start Most Popular -->
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Mais Comprados</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach ($products as $product)
                            @php
                                // Pegamos somente a primeira imagem a ser a principal
                                $image = Storage::get($product->productImage[0]->image_name);
                                $mime_type = Storage::mimeType($product->productImage[0]->image_name);
                                $image = 'data:' . $mime_type . ';base64,' . base64_encode($image);
                            @endphp

                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ $image }}" alt="#">
                                        <img class="hover-img" src="{{ $image }}" alt="#">
                                        <span class="out-of-stock">Hot</span>
                                    </a>
                                    <div class="button-head">

                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Adicionar ao Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                    <div class="product-price">
                                        <span>R$
                                            {{ number_format($product->value, 2, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
