@extends('layouts.auth')
@section('title', 'Login')
@section('auth')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="width: 800px; padding-top: 10px;">
            <form class="login100-form validate-form" style="width: 800px; margin-left: 30px;">
                <div class="login100-pic js-tilt" style="margin-left: 110px; padding-top: 40px;" data-tilt>
                    <img src="{{ asset('img/logo-2.png') }}" alt="IMG">
                </div>
                <span class="login100-form-title" style="padding-bottom:30px; padding-top: 40px;">
                    Registration
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Confirm Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Phone Number">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn" style="width: 25%;">
                    <button class="login100-form-btn">
                        Regist
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection