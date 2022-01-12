@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-section">
            <div class="content-section-title"></div>
            <div class="apps-card">

                <div class="app-card">
                    <span>
                        Sou Afiliado
                    </span>
                    <div class="app-card__subtext">{{ $user->filiados->name ?? 'Sem Filiação' }}
                    </div>
                    <div class="app-card-buttons">
                        @if ($user->filiados)

                        @else
                            <button class="content-button status-button">Afiliar-se</button>

                        @endif

                    </div>
                </div>
                <div class="app-card">
                    <span>
                        Meus Afiliados
                    </span>
                    <div class="app-card__subtext">Ver todos</div>
                    <div class="app-card-buttons">
                      <a href="{{ route('afiliados.todos') }}"> <button class="content-button status-button">Ver</button>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
