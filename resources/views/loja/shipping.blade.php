@extends('layouts.loja')

@section('content')
    <div class="container">
        <div class="main-adress">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="adress">
                        <div>
                            <div>
                                <h3>Selecione o endereço de entrega!</h3>
                            </div>
                            @if ($adress)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    {{ $adress->rua }},  {{ $adress->numero }} - {{ $adress->bairro }} - {{ $adress->cidade }}
                                </label>
                            </div>
                            <div class="text-center my-4">
                                <button class="btn btn-dark">Cadastrar outro</button>
                            </div>
                            @else
                            <div class="text-center my-4">
                                <button class="btn btn-dark">Cadastrar Novo</button>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center my-5">
            <a href="{{ route('checkout') }}"><button class="btn btn-success">Próximo</button></a>
        </div>
    </div>
@endsection
