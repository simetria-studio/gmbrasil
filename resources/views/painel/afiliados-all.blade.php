@extends('layouts.main')

@section('content')


    <div class="content-wrapper">
        <div class="row">
            @foreach ($users as $user)
                @if ($user->afiliados)
                    <div class="app-card col-6">

                        <div class="app-card__subtext">{{ $user->afiliados->name }}</div>
                        <div class="app-card__subtext">Código: {{ $user->afiliados->uniqid }}</div>
                        <div class="app-card__subtext">Compras: 0</div>
                        <div class="app-card-buttons">
                            <a href="{{ route('afiliados.todos') }}"> <button
                                    class="content-button status-button">Ver Afiliados</button>

                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <h4>Você não possuí filiados no momento!</h4>
                    </div>
                @endif
            @endforeach

        </div>

    </div>

@endsection
