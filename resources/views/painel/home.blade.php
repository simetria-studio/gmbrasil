@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-wrapper-header">
            <div class="content-wrapper-context">
                <h3 class="img-content">Olá, {{ Auth::user()->name }}</h3>
                <div class="content-text">
                    Esse é seu código: {{ Auth::user()->uniqid }}
                </div>
                <button class="content-button" data-toggle="modal" data-target="#exampleModal">Compartilhar</button>
            </div>
        </div>
        <div class="content-section">
            <div class="content-section-title">Atalhos</div>
            <div class="apps-card">

                <div class="app-card">
                    <span>
                        Pedidos
                    </span>
                    <div class="app-card__subtext">Faça seus pedidos
                    </div>
                    <div class="app-card-buttons">
                        <button class="content-button status-button">Ver</button>
                        <div class="menu"></div>
                    </div>
                </div>
                <div class="app-card">
                    <span>
                        Estoque
                    </span>
                    <div class="app-card__subtext">Seus produtos disponivel</div>
                    <div class="app-card-buttons">
                        <button class="content-button status-button">Ver</button>
                        <div class="menu"></div>
                    </div>
                </div>
                <div class="app-card">
                    <span>
                        Afiliados
                    </span>
                    <div class="app-card__subtext">Seus Afiliados
                    </div>
                    <div class="app-card-buttons">
                       <a href="{{ route('afiliados') }}"> <button class="content-button status-button">Ver</button></a>
                        <div class="menu"></div>
                    </div>
                </div>
                <div class="app-card">
                    <span>
                        Lucros
                    </span>
                    <div class="app-card__subtext">Seus lucros
                    </div>
                    <div class="app-card-buttons">
                        <button class="content-button status-button">Ver</button>
                        <div class="menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                   <div class="d-flex justify-content-center icons">
                    <div class="whatsapp">
                        <a href="whatsapp://send?text=Olá esse é meu código {{ auth()->user()->uniqid }} http://gmbrasilvd.com.br/register"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="mensenger">
                        <a href="fb-messenger://share/?link=http://gmbrasilvd.com.br/register&app_id={{ auth()->user()->uniqid }}"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                   </div>
                </div>

            </div>
        </div>
    </div>
@endsection
