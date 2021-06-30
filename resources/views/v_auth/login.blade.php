@extends('layouts.auth')
@section('title', 'Login')
@section('auth')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="padding-bottom: 150px">
            <div class="login100-pic js-tilt" data-tilt >
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-1.png') }}" alt="IMG">
                </a>
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title">
                    Login
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }} " autocomplete="email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
               
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" autocomplete="current-password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                @if(session('errors'))
                <div class="alert  alert-dismissible fade show " role="alert">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        <strong style="color: red; font-size: 10pt;">{{ $error }}</strong>
                    </li>
                    @endforeach
                    </ul>
                </div>
                @endif

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>


                <div class="text-center p-t-50">
                    <a class="nav-link txt2" href="{{ route('register') }}">{{ __('Create your Account') }}
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection