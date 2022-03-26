@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 30px;">
                <div class="login-header ">{{ __('Login') }}</div>

                <div class="tour-sidebar__search tour-sidebar__single">
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 mt-5">
                            <label for="email" class="col-md-4 col-form-label text-md-end y mt-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="x @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="y col-md-4 col-form-label text-md-end mt-2">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class=" x @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>

                        </div>

                        <div class="row mb-3 ">
                            <div class="col-md-3 offset-md-4 mx-auto">
                                <button type="submit" class=" login-submit ">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-left: 100px !important;">
                             @if (Route::has('password.request'))
                             <a class="forgot-link" style="font-size: 11px" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                             </a>
                            @endif
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
