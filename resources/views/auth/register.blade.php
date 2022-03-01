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
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-user"></i> <input type="text" class="form-control" placeholder="Meno priezvisko *" name="name" value="{{ old('name') }}" required autofocus />
                                                @error('name')
                                                    <div class="invalid-feedback d-inline-block text-left">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-envelope-open"></i> <input type="email" class="form-control" placeholder="E-mail *" name="email" value="{{ old('email') }}" required >
                                                @error('email')
                                                    <div class="invalid-feedback d-inline-block text-left">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input type="password" class="form-control" placeholder="Heslo *" name="password" autocomplete="new-password" required />
                                                @error('password')
                                                    <div class="invalid-feedback d-inline-block text-left">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input type="password" class="form-control" placeholder="Heslo znova *" name="password_confirmation" required />
                                                @error('password')
                                                    <div class="invalid-feedback d-inline-block text-left">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <button name="submit">
                                                Registrovať
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="sign-up">
                                    <p>
                                        Máte už svoj účet? <a href="{{ route('login') }}">Prihláste sa</a>
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
