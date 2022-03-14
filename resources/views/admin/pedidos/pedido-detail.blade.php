@extends('layouts.painel')

@section('content')
    <div class="container">
        <div class="card px-3">
            <div class="m-4">
                <h3>Detelhes do Pedido</h3>
            </div>
            <div class="row">
                <div class="col-md-6 my-3">
                    <h5 class="m-3">Comprador</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Nome: {{ $order->user->name }}</li>
                        <li class="list-group-item">Email: {{ $order->user->email }}</li>
                        <li class="list-group-item">Cpf: {{ $order->user->cpf }}</li>
                    </ul>
                </div>
                <div class="col-md-6 my-3">
                    <h5 class="m-3">Endereço de Entrega</h5>
                    <ul class="list-group">
                        <li class="list-group-item">CEP: {{ $order->adress->cep }}</li>
                        <li class="list-group-item">Rua: {{ $order->adress->rua }}</li>
                        <li class="list-group-item">Bairo: {{ $order->adress->bairro }}</li>
                        <li class="list-group-item">Cidade: {{ $order->adress->cidade }}</li>
                        <li class="list-group-item">Numero: {{ $order->adress->numero }}</li>
                        <li class="list-group-item">Complemento: {{ $order->adress->complemento }}</li>
                    </ul>
                </div>
                @foreach ($produtos as $produto)
                    <div class="col-md-6 my-3">
                        <h5 class="m-3">Produtos</h5>
                        <ul class="list-group">
                            <li class="list-group-item">ID: {{ $produto->product_id }}</li>
                            <li class="list-group-item">Produto: {{ $produto->name }}</li>
                            <li class="list-group-item">Quantidade: {{ $produto->quantity }}</li>
                            <li class="list-group-item">Preço: R$
                                {{ number_format($produto->price, 2, ',', '.') }}</li>
                            <li class="list-group-item">Total: R$
                                {{ number_format($produto->total, 2, ',', '.') }}</li>
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
