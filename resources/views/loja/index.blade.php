@extends('layouts.loja')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="categorias">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="left-panel">
                                <div class="precos">
                                    <h4>Preços</h4>
                                    <div class="mb-2 mr-0">
                                        <div>
                                            <input class="custom-check-input" value="option1" type="radio" id="all"
                                                name="preco">
                                            <label class="custom-control-label" for="all">Todos</label>
                                        </div>
                                        <div>
                                            <input class="custom-check-input" value="option2" type="radio" id="quinhentos"
                                                name="preco">
                                            <label class="custom-control-label" for="quinhentos">Até 500
                                                R$</label>
                                        </div>
                                        <div>
                                            <input class="custom-check-input" value="option3" type="radio" id="milzinho"
                                                name="preco">
                                            <label class="custom-control-label" for="milzinho">Entre 500 R$ e
                                                1000
                                                R$</label>
                                        </div>
                                        <div>
                                            <input class="custom-check-input" value="option4" type="radio" id="overpower"
                                                name="preco">
                                            <label class="custom-control-label" for="overpower">Acima de 1000
                                                R$</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="marcas">
                                    <h4>Marcas</h4>
                                    <ul class="list-group">
                                        <li class="mb-2 mr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input brand-checkbox"
                                                    id="customCheck1">
                                                <label for="customCheck1" class="custom-control-label">Samsung</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input brand-checkbox"
                                                    id="customCheck2">
                                                <label for="customCheck2" class="custom-control-label">Apple</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input brand-checkbox"
                                                    id="customCheck3">
                                                <label for="customCheck3" class="custom-control-label">Sony</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input brand-checkbox"
                                                    id="customCheck4">
                                                <label for="customCheck4" class="custom-control-label">HP</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input brand-checkbox"
                                                    id="customCheck5">
                                                <label for="customCheck5" class="custom-control-label">Motorola</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="frete">
                                    <h4>Fréte Grátis</h4>
                                    <ul class="list-group">
                                        <li class="mb-2 mr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input brand-checkbox"
                                                    id="frete">
                                                <label for="frete" class="custom-control-label">Fréte
                                                    Grátis</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 mt-4">
                            <div class="search mb-3">
                                <button class="lupa" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <input type="search" name="busca" id="" placeholder="Procure pelo produto">
                            </div>
                            <div class="product">
                                <div class="product-item mb-3">
                                    <a href="">
                                        <div class="product-image">
                                            <img src="https://cdn-demo.algolia.com/bestbuy-0118/6443034_sb.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="product-body">
                                        <div class="text">
                                            <a href="#"> - MacBook Air</a>
                                            <p class="mb-0">Macbook Air features up to 8GB of memory</p>
                                        </div>
                                        <div class="product-action my-2">
                                            <button type="button" class="btn btn-primary text-uppercase btn-sm add-to-cart">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                            <p class="price">999.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
