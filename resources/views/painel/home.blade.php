@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-wrapper-header">
            <div class="content-wrapper-context">
                <h3 class="img-content">Olá, {{ Auth::user()->name }}</h3>
                <div class="content-text">
                    Esse é seu link de indicação: {{ Auth::user()->uniqid }}
                </div>
                <button class="content-button">Compartilhar</button>
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
                        <button class="content-button status-button">Update</button>
                        <div class="menu"></div>
                    </div>
                </div>
                <div class="app-card">
                    <span>
                        Estoque
                    </span>
                    <div class="app-card__subtext">Seus produtos disponivel</div>
                    <div class="app-card-buttons">
                        <button class="content-button status-button">Update</button>
                        <div class="menu"></div>
                    </div>
                </div>
                <div class="app-card">
                    <span>
                        Indicações
                    </span>
                    <div class="app-card__subtext">Seus indicados
                    </div>
                    <div class="app-card-buttons">
                        <button class="content-button status-button">Update</button>
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
                        <button class="content-button status-button">Update</button>
                        <div class="menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
