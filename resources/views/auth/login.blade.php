@extends('layouts.auth')

@section('content')

    <div class="row">
        <div class="col-0 col-md-4"></div>
        <div class="col-12 col-md-4 mt-40">
            <div class="card">
                <div class="card-body">
                    @guest
                        <form method="POST" action="{{ route('login') }}">

                            <h1>Login</h1>

                            @csrf

                            <div class="row mt-6 mb-3">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-7 text-right">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 text-right mt-6">
                                    <button type="button" class="btn btn-primary btn-light-primary mr-3" onclick="location.href='{{ route('register') }}'">
                                        {{ __('Register') }}
                                    </button>

                                    <button type="submit" class="btn btn-success">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    @else
                        <form method="post" action="{{ route('logout') }}" accept-charset="utf-8">

                            <h1>You are logged in!</h1>

                            @csrf
                            <div class="row mt-6">
                                <div class="col-12 col-md-12">
                                    {{ auth()->user()->email }}
                                </div>
                                <div class="col-12 col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Logout
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
