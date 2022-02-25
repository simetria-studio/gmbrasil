@extends('layouts.loja')

@section('content')

    <div class="wrap cf">
        <div class="heading cf">
            <h1>Meu Carrinho</h1>
            <a href="#" class="continue">Continue comprando</a>
        </div>
        <div class="cart">

            <ul class="cartWrap">

            </ul>
        </div>

        <div class="subtotal cf">
            <ul>
                <li class="totalRow"><span class="label">Subtotal</span><span
                        class="value">$35.00</span></li>

                </li>
                <li class="totalRow final"><span class="label">Total</span><span
                        class="value">$44.00</span></li>
                <li class="totalRow"> <button class="waves-effect waves-orange btn btn-dark">FINALIZAR COMPRA</button>
                </li>
            </ul>
        </div>
    </div>
@endsection
