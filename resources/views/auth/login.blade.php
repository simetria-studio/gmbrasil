@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pre-logo">
            <div class="logo">
                <img src="{{ url('assets/img/logo.png') }}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <h3 class="text-center">Entrar na GM Brasil</h3>
            </div>
            <div class="col-md-12">
                <form action="{{ url('login-user') }}" id="form-login" method="post">
                    @csrf
                    <div class="group"><input type="email" name="email" required="required" />
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                    <div class="group"><input type="password" name="password" required="required" />
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Senha</label>
                    </div>
                    <div class="btn-box py-4">
                        <button id="btn-login" class="btn btn-submit" type="button">Entrar</button>
                    </div>
                    <div class="text-register text-center my-3">
                        <a href="{{ route('register') }}" class="text-white"><strong>Não tem cadastro?</strong></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
