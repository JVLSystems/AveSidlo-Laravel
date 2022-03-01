@extends('layouts.layout')

@section('content')
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="login-box">
                        <div class="login">
                            <div class="content">
                                <a href="Homepage:default"><img src="{{ asset('/assets/img/logo.png') }}" alt="Logo" style="width: 150px;"></a>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-envelope-open"></i> <input type="email" class="form-control" placeholder="E-mail *" name="email" required autofocus />
                                                @error('email')
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
                                                Odoslať
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
