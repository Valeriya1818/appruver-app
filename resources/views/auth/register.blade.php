@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center mt-40">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">

                        <h1>Registration</h1>

                        @csrf

                        <div class="row mt-6 mb-3">
                            <div class="col-12 col-md-4">
                                <label for="name" class="mt-3">{{ __('app.name') }}</label>
                            </div>

                            <div class="col-12 col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 col-md-4">
                                <label for="name" class="mt-3">{{ __('app.email_address') }}</label>
                            </div>

                            <div class="col-12 col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 col-md-4">
                                <label for="name" class="mt-3">{{ __('app.password') }}</label>
                            </div>

                            <div class="col-12 col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 col-md-4">
                                <label for="name" class="mt-3">{{ __('app.confirm_password') }}</label>
                            </div>

                            <div class="col-12 col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-12 col-md-4">
                                <label for="name" class="mt-3">{{ __('app.company') }}</label>
                            </div>

                            <div class="col-12 col-md-8">
                                <input id="company" type="text" class="form-control" maxlength="100" name="company" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="button" class="btn btn-light-primary mr-3" onclick="location.href='{{ route('login') }}'">
                                    {{ __('app.go_back') }}
                                </button>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
