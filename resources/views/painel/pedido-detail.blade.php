@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="m-3">
                <h5>Detelhe do pedido</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p>Forma de pagamento: {{ $order->payment_type }}</p>
                    </div>
                    @if ($order->boleto)
                    <div class="col-md-4">
                       <a href="{{ $order->boleto }}" target="_blank"> <button class="btn btn-dark">Baixar boleto</button></a>
                    </div>
                    @endif
                </div>
            </div>
            <div>

            </div>
            <div class="m-3">
                <h6>Produtos</h6>
            </div>
            <div class="row">
                @foreach ($produtos as $item)
                    <div class="col-md-6">
                        <div class="my-3 mx-2">
                            <ul class="list-group">
                                <li class="list-group-item">Produto: {{ $item->name }}</li>
                                <li class="list-group-item">Quantidade: {{ $item->quantity }}</li>
                                <li class="list-group-item">Preço: R$
                                    {{ number_format($item->price, 2, ',', '.') }}</li>
                                <li class="list-group-item">Total: R$
                                    {{ number_format($item->total, 2, ',', '.') }}</li>

                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
