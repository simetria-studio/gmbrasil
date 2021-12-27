@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastre-se') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" name="wf-form-formfreetrialtest"
                            data-name="formfreetrialtest" id="formfreetrialtest">
                            @csrf
                            <div class="multi-steps d-none">
                                <div class="multi-step active">
                                    <div class="general-white-text-link">1</div>
                                </div>
                                <div class="multi-step">
                                    <div class="general-white-text-link">2</div>
                                </div>
                                <div class="multi-step">
                                    <div class="general-white-text-link">3</div>
                                </div>
                            </div>
                            <div class="multi-tab">
                                <div class="two-columns-container">
                                    <div class="row mb-3 form-field-container">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Nome Completo') }}</label>
                                        <div data-w-id="3bbf8d46-5b9f-9160-b9dc-dbe34db12633"
                                            class="col-md-6 input-tooltip-trigger">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-field-container">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Endereço de E-Mail') }}
                                        </label>
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3 form-field-container">
                                        <label for="indicado"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Indicado?') }}
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control regular-input" name="indicado"
                                                placeholder="Coloque o código" id="indicado">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field-container _0-bm"></div>
                            </div>
                            <div class="multi-tab">
                                <div class="row mb-0 form-field-container">
                                    <label for="rg" class="col-md-4 col-form-label text-md-end">{{ __('RG') }}
                                    </label>
                                    <div class="input-tooltip-trigger">
                                        <div class="col-md-6">
                                            <input id="rg" type="text" class="form-control" name="rg" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0 form-field-container">
                                    <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}
                                    </label>
                                    <div class="input-tooltip-trigger">
                                        <div class="col-md-6">
                                            <input id="cpf" type="text" class="form-control" name="cpf" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0 form-field-container">
                                    <label for="nascimento"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Data de nascimento') }}
                                    </label>
                                    <div class="input-tooltip-trigger">
                                        <div class="col-md-6">
                                            <input id="nascimento" type="date" class="form-control" name="nascimento" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="multi-tab">
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="missing-div-multiform">
                                <p class="missing-multiform field-label"><strong>Lembrete:</strong> é necessário preencher todo campo para continuar</p>
                            </div>
                            <div class="multi-steps">
                                <a id="prevBtn" href="#" class="primary-btn w-button" style="display: none;">Back</a>
                                <input type="submit" value="Submit" data-wait="" id="submit" class="btn btn-primary">
                                <input type="submit" value="Next" data-wait="" id="nextBtn" class="btn btn-primary w-button" style="display: inline;"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
