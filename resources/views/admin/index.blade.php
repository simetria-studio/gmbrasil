@extends('layouts.painel')

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-1 text-primary">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>Clientes</h5>
                        <h3>{{ $users->count() }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-2 text-warning">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>Produtos</h5>
                        <h3>{{ $products->count() }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-3 text-danger">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>Vendas</h5>
                        <h3>0</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-4 text-info">
                <div class="iq-card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5>Lucros</h5>
                        <h3>R$0,00</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
