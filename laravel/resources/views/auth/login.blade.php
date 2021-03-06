@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    <div class="row">
      <div class="col-md-6 hero-login">
        <img src="{{asset('img/chart_illustration.svg')}}" alt="">
      </div>
        <div class="col-md-6">
            <div class="container">
                <div class="login-form">
                  <div class="headline">
                    <h1>{{ __('Accedi alla tua area riservata') }}</h1>
                  </div>
                </div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Email') }}</strong></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Password') }}</strong></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-form form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordati di me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="login-form form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit">
                                    {{ __('Continua') }}
                                </button>
                            </div>

                            @if (Route::has('password.request'))
                            <div class="col-md-6 offset-md-4">
                              <button class="white" type="button" name="button">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Password dimenticata?') }}
                                </a>
                              </button>
                            </div>

                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
