@extends('layouts.app')
@section('style')

<style>

input , select {
    font-size: 14px !important;
    padding-left: 12px !important;
}

</style>

@endsection
@section('content')
{{Session::get("message")}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 10px;">
                <div class="login-header">{{ __('Register') }}</div>
                <div class="tour-sidebar__search tour-sidebar__single">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end yy mt-1">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="xx @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="yy mt-1 col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="xx @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="yy mt-1 col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="xx @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="yy mt-1 col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="xx" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="yy mt-1 col-md-4 col-form-label text-md-end">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="xx" name="phone">
                            </div>
                        </div>

                            <div class="row  mb-4">
                            <label for="role" class=" yy mt-1 col-md-4 col-form-label text-md-end">Role</label>
                            <div class="col-md-6">
                                <select name="role" id="role" class="xx form-select-md mb-3">
                                    <option value="user">User</option>
                                    <option value="seller">Seller</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4"  style="margin-left: 38%;">
                                <button type="submit" class="login-submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
