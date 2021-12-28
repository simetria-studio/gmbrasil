@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">GM BRASIL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Olá, {{ auth()->user()->name }} <br>
                    Seu código é: <span class="text-success">{{ auth()->user()->uniqid }}</span> <br>
                    <br>
                    Estamos trabalhando para você, tudo vai ficar certinho tenha paciência. <br>
                    <br>
                    Toda grande jornada começa com um simples passo!<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
