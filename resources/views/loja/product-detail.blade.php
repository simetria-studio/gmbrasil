@extends('layouts.loja')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-md-6 iq-item-product-left">
                                <div class="iq-image-container">
                                    <div class="iq-product-cover d-flex justify-content-center">
                                        <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                            class="img-fluid">
                                    </div>
                                    <div class="iq-additional_slider">
                                        <ul id="product-additional-slider" class="d-flex m-0 p-0">
                                            <li>
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                                    class="img-fluid">
                                            </li>
                                            <li>
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                                    class="img-fluid">
                                            </li>
                                            <li>
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                                    class="img-fluid">
                                            </li>
                                            <li>
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                                    class="img-fluid">
                                            </li>
                                            <li>
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                                    class="img-fluid">
                                            </li>
                                            <li>
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                                    class="img-fluid">
                                            </li>
                                            <li>
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}" alt="product-image"
                                                    class="img-fluid">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 iq-item-product-right">
                                <div class="product-additional-details">
                                    <h3 class="productpage_title">Curabitur Dolor Nunc consectetur adipiscing</h3>
                                    <p>consectetur adipiscing</p>

                                    <div class="product-descriptio">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris
                                            eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate
                                            orci purus ut lorem. In fringilla mi in ligula.
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        <div class="regular-price">
                                            <b> $100.00</b>
                                            <span class="offer-price ml-2">$150.00</span>
                                        </div>
                                    </div>
                                    <div class="shipping">
                                        <p class="mb-0">Frete: <span>$50</span></p>
                                    </div>
                                    <div class="stock">
                                        <p>Estoque: <span>Disponivel</span></p>
                                    </div>
                                    <div class="additional-product-action">
                                        <div class="product-action ml-2">
                                            <div class="add-to-cart">
                                                <a href="#"> Add ao carrinho </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 product-description-details">
                                <div class="description-tabs">
                                    <ul class="nav nav-tabs justify-content-center" id="myTab-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="description-tab-justify" data-toggle="tab"
                                                href="#description" role="tab" aria-selected="true">Descrição
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="specifications-tab-justify" data-toggle="tab"
                                                href="#specifications" role="tab" aria-selected="false">Especificações
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="review-tab-justify" data-toggle="tab"
                                                href="#review" role="tab" aria-selected="false">Review
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent-3">
                                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                                            aria-labelledby="description-tab-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pharetra nibh
                                                et urna tempus, id feugiat sapien iaculis. Morbi aliquam et nisl ut
                                                varius. Vivamus fringilla, nisl ac lacinia fermentum, nisl felis
                                                facilisis lectus, id condimentum turpis quam ac ipsum. Vivamus purus
                                                nisi, condimentum eget felis vel, finibus interdum odio. Pellentesque
                                                lacinia aliquam ipsum. Donec euismod ex in sodales faucibus. Proin eget
                                                lacus vitae eros vestibulum vehicula. Mauris tortor massa, fringilla ut
                                                metus quis, malesuada semper diam. Phasellus et iaculis ex, vitae
                                                maximus odio.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="specifications" role="tabpanel"
                                            aria-labelledby="specifications-tab-justify">
                                            <p>Mauris laoreet tempor orci, quis rhoncus urna porttitor ut. Quisque
                                                volutpat ultrices elit, ut scelerisque lacus mattis id. Quisque non
                                                euismod leo. Aenean turpis orci, dictum id luctus ac, pretium pulvinar
                                                enim. Phasellus quam eros, porttitor sed iaculis at, lacinia at augue.
                                                Aenean vel lacinia eros. Curabitur ac feugiat libero. Praesent malesuada
                                                mauris arcu, sed mollis leo efficitur pretium. Nunc ornare tempor nulla.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="review" role="tabpanel"
                                            aria-labelledby="review-tab-justify">
                                            <p>In in mauris a sem ullamcorper maximus. In facilisis sapien vel consequat
                                                laoreet. Ut convallis elit vitae augue interdum dapibus. Vivamus nec
                                                urna quis ex congue consectetur. Sed egestas dapibus neque eu finibus.
                                                Fusce mollis congue augue, commodo ornare ante hendrerit vitae. Nunc
                                                luctus ac nunc quis facilisis. Nullam vitae gravida elit. Pellentesque
                                                maximus auctor gravida. Nulla imperdiet odio neque, non porta lacus
                                                feugiat sed. Curabitur eu lectus ut lectus convallis mattis sit amet sit
                                                amet lectus. Curabitur elit lorem, commodo a neque ac, feugiat tempor
                                                felis.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mt-5 related-product">
                    <div class="related-heading text-center mb-5">
                        <h2>Produtos relacionados</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
