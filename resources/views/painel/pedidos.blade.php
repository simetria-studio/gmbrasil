@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="text-white m-4">
            <h5>Meus Pedidos</h5>
        </div>
        <div class="card my-3 mx-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Data</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->reference }}</th>
                                <td>{{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</td>
                                <td>Aguardando pagamento...</td>
                                <td>
                                    <div>
                                       <a href="{{ route('pedidos.detelhes', $order->id) }}"> <button class="btn btn-dark">Ver Pedido</button></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="m-4">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
