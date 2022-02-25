@extends('layouts.layout')

@section('content')
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="login-box">
                        <div class="login">
                            <div class="content">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/logo.png') }}" alt="Logo" style="width: 150px;"></a>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-envelope-open"></i> <input type="email" class="form-control" placeholder="E-mail *" name="email" value="{{ old('email') }}" required autofocus />
                                                @error('email')
                                                    <div class="invalid-feedback d-inline-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input type="password" class="form-control" placeholder="Heslo *" name="password" required autocomplete="current-password" />
                                                @error('password')
                                                    <div class="invalid-feedback d-inline-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="link align-right">
                                                <a href="{{ route('password.request') }}">Zabudnuté heslo?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <button name="submit">
                                                Prihlásiť
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="sign-up">
                                    <p>
                                        Nemáte ešte zaregistrovanú svoju spoločnosť? <a href="{{ route('register') }}">Registrujte sa</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
