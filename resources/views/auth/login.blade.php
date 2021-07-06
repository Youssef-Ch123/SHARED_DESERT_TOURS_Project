@extends('AuthentificationLayout')
@section('login')
<form class="kt-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('E-Mail Address') }}" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control @error('password') is-invalid @enderror" id="password" type="Password" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row kt-login__extra">
            <div class="col kt-align-left">
                <label class="kt-checkbox">
                    <input type="checkbox" name="remember"> Remember me
                    <span></span>
                </label>
            </div>
            <div class="col kt-align-right">
                <a href="javascript:;" id="kt_login_forgot" class="kt-link">Forget Password ?</a>
            </div>
        </div>
        <div class="kt-login__actions">
                <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}


        </div>
    </form>
@endsection

@section('register')

<form class="kt-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
        </div>
        <div class="row kt-login__extra">
            <div class="col kt-align-left">
                <label class="kt-checkbox">
                    <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                    <span></span>
                </label>
                <span class="form-text text-muted"></span>
            </div>
        </div>
        <div class="kt-login__actions">
                <input type="submit" class="btn btn-brand btn-pill btn-elevate" value="Sign Up"/>&nbsp;&nbsp;
            <button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
        </div>
    </form>
@endsection

