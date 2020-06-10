@extends('back.layouts.app', [$auth = true])

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
<div class="login-wrapper">
    <div class="container">
        <div class="loginbox">
            <div class="login-left">
                <!-- <img class="img-fluid" src="{{ asset('assets/back/img/logo.png') }}" alt="Logo"> -->
            </div>

            <div class="login-right">
                <div class="login-right-wrap">
                    <h1>Mot de passe oublié?</h1>
                    <p class="account-subtitle">Entrer votre adresse mail pour avoir le lien de réinitialisation de votre mot de passe</p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit"> Changer de mot de passe</button>
                        </div>
                    </form>
                    <!-- /Form -->

                    <div class="text-center dont-have">Vous vous rappelez de votre mot de passe? <a href="{{ route('login') }}">Connectez-vous ici</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
