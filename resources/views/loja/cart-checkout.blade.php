@extends('layouts.loja')

@section('content')
    <div class="wrap cf">
        <div class="heading cf">
            <h1>Meu Carrinho</h1>
            <a href="{{ route('loja') }}" class="continue">Continue comprando</a>
        </div>
        <div class="cart">

            <ul class="cartWrap">

            </ul>
        </div>

        <div class="subtotal cf">
            <ul>
                <li class="totalRow"><span class="label">Subtotal</span><span
                        class="value"></span></li>

                </li>
                <li class="totalRow final"><span class="label">Total</span><span
                        class="value"></span></li>
                <li class="totalRow">
                    <a href="{{ route('shipping') }}"><button class="waves-effect waves-orange btn btn-dark">FINALIZAR COMPRA</button></a>
                </li>
            </ul>
        </div>
    </div>
@endsection
