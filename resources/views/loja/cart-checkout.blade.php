@extends('layouts.loja')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1">Carrinho</li>
                    <li class="step0" id="step2">Endereço</li>
                    <li class="step0" id="step3">Pagamento</li>
                </ul>
                <div id="cart" class="card-block show b-0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <div class="ckeckout-product-lists">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="ckeckout-product">
                                                <img src="{{ asset('dark-html/images/index.jpeg') }}"
                                                    alt="ckeckout-product">
                                            </div>
                                            <div class="checkout-product-details">
                                                <h5>Curabitur Dolor Nunc consectetur adipiscing</h5>
                                                <p class="text-success">Em estoque</p>
                                                <div class="price">
                                                    <h5>$599.00</h5>
                                                    <p class="shopping-info">
                                                        <i class="ri-shopping-cart-2-line mr-2"></i>Fréte Grátis
                                                    </p>
                                                </div>
                                                <div class="checkout-button d-flex flex-wrap align-items-center mt-4">
                                                    <a href="#" class="btn btn-light d-block">
                                                        <i class="ri-close-line mr-1"></i>Remove
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="checkout-amount-data text-center">
                                                <div class="d-flex justify-content-between">
                                                    <div class="checkout-policy">
                                                        <p class="mb-0 mt-2">Entrega até, 30 de Janeiro.</p>
                                                        <div class="d-flex justify-content-center btn-increment mt-3">
                                                            <button type="button" class="btn-less">
                                                                <i class="ri-subtract-fill"></i>
                                                            </button>
                                                            <input type="number" min="1" max="10" value="1"
                                                                class="increment">
                                                            <button type="button" class="btn-plus">
                                                                <i class="ri-add-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <p>Opções</p>
                                    <hr>
                                    <p><b>Detalhes de preços</b></p>
                                    <div class="d-flex justify-content-between">
                                        <span>Total</span>
                                        <span>$500</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Desconto</span>
                                        <span class="text-success">-15$</span>
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <span>Taxa de entrega</span>
                                        <span class="text-success">Grátis</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-dark"><strong>Total</strong></span>
                                        <span class="text-dark"><strong>$485</strong></span>
                                    </div>
                                    <a id="place-order" href="javascript:void();"
                                        class="btn btn-primary d-block mt-1 next">Faça encomenda</a>
                                </div>
                            </div>
                            <div class="iq-card ">
                                <div class="card-body iq-card-body p-0 iq-checkout-policy">
                                    <ul class="p-0 m-0">
                                        <li class="d-flex align-items-center">
                                            <div class="iq-checkout-icon">
                                                <i class="ri-checkbox-line"></i>
                                            </div>
                                            <h6>Política de segurança (Pagamento totalmente Seguro.)</h6>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="iq-checkout-icon">
                                                <i class="ri-truck-line"></i>
                                            </div>
                                            <h6>Política de entrega (entrega em domicílio.)</h6>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="iq-checkout-icon">
                                                <i class="ri-arrow-go-back-line"></i>
                                            </div>
                                            <h6>Política de devolução (Devolução fácil.)</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="address" class="card-block b-0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Adicionar novo endereço</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form onsubmit="required()">
                                        <div class="row mt-3">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Numero de telefone: *</label>
                                                    <input type="text" class="form-control" name="mno" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>CEP: *</label>
                                                    <input type="text" class="form-control" name="pincode" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Cidade: *</label>
                                                    <input type="text" class="form-control" name="city" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Estado: *</label>
                                                    <input type="text" class="form-control" name="state" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Apartamento, Casa Nº: *</label>
                                                    <input type="text" class="form-control" name="houseno" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Pronto de referencia: *</label>
                                                    <input type="text" class="form-control" name="landmark" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="addtype">Tipo de endereço</label>
                                                    <select class="form-control" id="addtype">
                                                        <option>Casa</option>
                                                        <option>Trabalho</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button id="savenddeliver" type="submit" class="btn btn-primary">Salvar e
                                                    entregar aqui</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <h4 class="mb-2">Nik John</h4>
                                    <div class="shipping-address">
                                        <p class="mb-0">9447 Glen Eagles Drive</p>
                                        <p>Lewis Center, OH 43035</p>
                                        <p>UTC-5: Eastern Standard Time (EST)</p>
                                        <p>202-555-0140</p>
                                    </div>
                                    <hr>
                                    <a id="deliver-address" href="javascript:void();"
                                        class="btn btn-primary d-block mt-1 next">Entregar nesse endereço</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="payment" class="card-block b-0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Opções de pagamentos</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('dark-html/images/booking/03.png') }}" alt="" height="40"
                                                width="50">
                                            <span>Cartão de Débito 12XX XXXX XXXX 0000</span>
                                        </div>
                                        <span>Nik John</span>
                                        <span>28/2020</span>
                                    </div>
                                    <form class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <span>Enter CVV: </span>
                                            <div class="cvv-input ml-3 mr-3">
                                                <input type="text" class="form-control" required="">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Continue</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="card-lists">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="credit" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="credit"> Credito / Débito</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="add-card">
                                        <a href="#"><span><i class="ri-add-box-line mr-2 font-size-18"></i>Adicionar
                                                cartão</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <h4 class="mb-2">Detalhes de preços</h4>
                                    <div class="d-flex justify-content-between">
                                        <span>Preço 1 Item</span>
                                        <span><strong>$485.00</strong></span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Fréte</span>
                                        <span class="text-success">Grátis</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span>Total</span>
                                        <span><strong>$485.00</strong></span>
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
