@extends('layouts.main_auth')

@section('container')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" >
            <div style="margin-left: 90px;" class="login100-pic js-tilt text-center" data-tilt>
                <img width="1500px" src="{{ asset('login/images/mango.png') }}" alt="IMG">
                <h3>SP Tanaman Mangga</h3>
            </div>

            <form action="auth/login" method="POST" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title">
                    <h5><i class="fa fa-group"></i> Please Login</h5>
                </span>

                {{-- Tampilan Gagal Login --}}
                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    {{ session('loginError') }}
                </div>
                @endif

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input value="" class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input value=""  class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

