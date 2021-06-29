@extends('layouts.auth')
@section('title', 'Registration')
@section('auth')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="width: 800px; padding-top: 10px;">

            <form class="login100-form validate-form" style="width: 800px; margin-left: 30px;" method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="login100-pic js-tilt" style="margin-left: 110px; padding-top: 40px;" data-tilt>
                    <img src="{{ asset('img/logo-2.png') }}" alt="IMG">
                </div>
                <span class="login100-form-title" style="padding-bottom:30px; padding-top: 40px;">
                    Registration
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Input your name!">
                    <input id="name" class="input100" type="text" name="name" placeholder="Name" value="{{ old('name') }}" autocomplete="name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="wrap-input100 validate-input" data-validate = "Must be 8 character">
                            <input id="password" class="input100" name="password"" type="password" name="password" placeholder="Password" autocomplete="new-password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>               
                        </div>
                    </div>
                    <div class="col">
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
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
                <div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
                    <input id="phone" class="input100" type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" autocomplete="email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                          </svg>
                    </span>
                </div>
                <div class="container-login100-form-btn" style="width: 25%;">
                    <button type="submit" class="login100-form-btn">
                        Regist
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection