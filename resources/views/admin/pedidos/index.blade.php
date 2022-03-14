@extends('layouts.painel')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Pedidos</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div id="table" class="table-editable">
                        <span class="float-right mb-3 mr-2">
                            {{-- <button class="btn btn-sm iq-bg-success"><i class="ri-add-fill"><span
                                    class="pl-1">Adicionar Novo</span></i>
                        </button> --}}
                        </span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Comprador</th>
                                    <th>Método de Pagamento</th>
                                    <th>Total</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td contenteditable="true">{{ $order->reference }}</td>
                                        <td contenteditable="true">{{ $order->user->name }}</td>
                                        <td contenteditable="true">{{ $order->payment_type }}</td>
                                        <td contenteditable="true">R$
                                            {{ number_format($order->total, 2, ',', '.') }}</td>
                                        <td contenteditable="true">{{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</td>
                                        <td contenteditable="true">Aguardando Pagamento...</td>
                                        <td>
                                            <a href="{{ route('admin.pedidos.detelhe', $order->id) }}"><span><button
                                                        type="button"
                                                        class="btn iq-bg-dark btn-rounded btn-sm my-0">Ver</button></span></a>
                                            {{-- <span class=""><button type="button"
                                                    class="btn iq-bg-dark btn-rounded btn-sm my-0" data-toggle="modal"
                                                    data-target="#exampleModal"
                                                    data-dados="{{ json_encode($order) }}">Status</button></span> --}}
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
