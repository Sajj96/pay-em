@extends('layouts.app')

@section('content')
<div class="login-card card-block">
    <form class="md-float-material" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center">
            <img src="assets/images/logo-black.png" alt="logo">
        </div>
        <h3 class="text-center txt-primary">
            Sign In to your account
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="md-input-wrapper">
                    <input type="email" id="email" class="md-form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    <label for="email">Email</label>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-12">
                <div class="md-input-wrapper">
                    <input type="password" id="password" class="md-form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                    <label for="password">Password</label>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                    <label class="input-checkbox checkbox-primary">
                        <input type="checkbox" id="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="checkbox"></span>
                    </label>
                    <div class="captions">Remember Me</div>

                </div>
            </div>
            <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                    @if (Route::has('password.request'))
                    <a class="text-right f-w-600" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 offset-xs-1">
                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('LOGIN') }}</button>
            </div>
        </div>
        <!-- <div class="card-footer"> -->
        <div class="col-sm-12 col-xs-12 text-center">
            <span class="text-muted">Don't have an account?</span>
            <a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
        </div>

        <!-- </div> -->
    </form>
    <!-- end of form -->
</div>
<!-- end of login-card -->
@endsection