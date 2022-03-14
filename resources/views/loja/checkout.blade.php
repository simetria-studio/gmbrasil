@extends('layouts.loja')

@section('content')
    <div class="container">
        <div class="main-checkout">
            <div class="text-center">
                <h3>Selecione o método de pagamento!</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input radio" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="boleto">
                            <label class="form-check-label" for="exampleRadios1">
                                Boleto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input radio" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="card">
                            <label class="form-check-label" for="exampleRadios1">
                                Cartão de Crédito
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-none" id="boleto">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <button id="btnboleto" type="button" class="btn btn-primary btnBoleto">FINALIZAR</button>
                        </form>
                    </div>
                    <div class="d-none" id="card">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Numero do cartão</label>
                                <input type="text" name="number" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <label for="exampleInputEmail1">Nome do Titular</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                    <label for="exampleFormControlSelect1">Mês</label>
                                    <select class="form-control" name="mounth">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <label for="exampleFormControlSelect1">Ano</label>
                                    <select class="form-control" name="year">
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                    </select>
                                <label for="exampleInputEmail1">cvv</label>
                                <input type="text" name="cvv" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Quantidade de Parcelas</label>
                                    <select class="form-control" name="parcela" id="parcelas">
                                        <option>Selecione a Quantidade de Parcelas</option>
                                    </select>
                                </div>
                                <input type="hidden" id="ValorParcelas" name="valor">
                            </div>
                            <button type="button" class="btn btn-primary subCard" id="btncard">FINALIZAR</button>
                        </form>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const session = '{{ session()->get('pagseguro_session_code') }}';
        console.log(session);
        PagSeguroDirectPayment.setSessionId(session);
    </script>
    <script>
        let total = {{ \Cart::getTotal() }};
    </script>
    <script>
        $('[name="number"]').mask("0000000000000000");
    </script>
@endsection
