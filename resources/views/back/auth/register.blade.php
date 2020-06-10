@extends('back.layouts.app', [$auth = true])

@section('content')
<div class="login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <!-- <img class="img-fluid" src="{{ asset('assets/front/img/logo.png') }}" alt="Logo"> -->
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Enregistrez-vous</h1>
                        <p class="account-subtitle">Accedez au back-office</p>

                        <!-- Form -->
                        <form action="{{ route('back.register.post') }}" method="POST">
                            @csrf
                            {{-- Name --}}
                            <strong>{{$errors->first('nom')}}</strong>
                            <div class="form-group">
                                <input class="form-control" name="nom" value="{{ old('nom') }}" required autocomplete="name" type="text" autofocus placeholder="Name">
                            </div>

                            {{-- Email --}}
                            <div class="form-group">
                                <strong>{{$errors->first('email')}}</strong>
                                <input class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" type="text" placeholder="Email">
                            </div>

                            {{-- Pass --}}
                            <strong>{{$errors->first('password')}}</strong>
                            <div class="form-group">
                                <input class="form-control" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
                            </div>

                            {{-- Confirm pass --}}
                            <div class="form-group">
                                <input class="form-control" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">S'enregistrer</button>
                            </div>
                        </form>
                        <!-- /Form -->

                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">ou</span>
                        </div>

                        <!-- Social Login -->
                        {{-- <div class="social-login">
                            <span>Register with</span>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div> --}}
                        <!-- /Social Login -->

                        <div class="text-center dont-have">
                            Vous avez deja un compte? <a href="{{ route('back.login') }}">Connectez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
