@extends('back.layouts.app', [$auth = true])

@section('content')
<div class="login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <!-- <img class="img-fluid" src="{{ asset('assets/back/img/logo.png') }}" alt="Logo"> -->
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Connectez-vous</h1>
                        <p class="account-subtitle">Accedez au back-office</p>

                        <!-- Form -->
                        <form action="{{ route('back.login.post') }}" method="POST">
                            @csrf
                            @if($errors->all())
                                <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Erreur dans les informations</strong>
                            @endif
                            <div class="form-group">
                                <input class="form-control" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" type="text" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <button style="margin-bottom: 20px" class="btn btn-primary btn-block" type="submit">Se Connectez</button>
                            </div>
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
