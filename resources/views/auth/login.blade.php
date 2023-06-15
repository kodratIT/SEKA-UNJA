@extends('layouts.app')

@section('content')
 <!-- GLOABAL LOADER -->
 <div id="global-loader">
    <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
  <!-- PAGE -->
  <div class="page">
    <div class="">
        <!-- Theme-Layout -->

        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto mt-7">
            <div class="text-center">
                <a href="{{route('Home')}}"><img src="../assets/images/brand/logo-white-login.png" class="header-brand-img" alt=""></a>
            </div>
        </div>
<!-- /GLOABAL LOADER -->
        <div class="container-login100">
            <div class="wrap-login100 p-6">
            <div class="row justify-content-center">
                        {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                        <span class="login100-form-title pb-5">
                            Login
                        </span>
                        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input id="email" type="email" class="input100 border-start-0 form-control ms-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email" autofocus >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                </a>
                                    <input id="password" type="password" class="input100 border-start-0 form-control ms-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Passwprd">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            
                            {{-- <div class="text-end pt-4">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div> --}}
                            <div class="row mb-1 pt-4">
                                <div class="col-md-12 mx-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Not a member?<a href="{{ route('register') }}" class="text-primary ms-1">Register</a></p>
                            </div>
                                   
                        </form>
            </div>
            </div>
        </div>
    </div>
  </div>
@endsection
